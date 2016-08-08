<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use DB;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	 public function generateJsonHome() {
        $time = time();
        $berita_pilihan = Berita::orderBy(DB::raw('RAND()'))
		->where('time','>', $time-(3600*12))
        ->take(4)
        ->get()->toJson();
        Storage::put('json/home/berita_pilihan.json',  $berita_pilihan);

        $berita_terbaru = Berita::orderBy('time', 'desc')
        ->take(3)
        ->get()
        ->toJson();
        Storage::put('json/home/berita_terbaru.json',  $berita_terbaru);
        
        $berita = Berita::where('kategori','berita')
        ->orderBy('time', 'desc')
        ->take(3)
        ->get()
        ->toJson();
        Storage::put('json/home/berita.json',  $berita);
        
        $galeri = Berita::select('img_tumb','url','time','title')
        ->orderBy(DB::raw('RAND()'))
        ->take(4)
        ->get()
        ->toJson();
        Storage::put('json/home/galeri.json',  $galeri);
        
        $internasional = Berita::where('kategori','internasional')
        ->orderBy('time', 'desc')
        ->take(4)
        ->get()
        ->toJson();
        Storage::put('json/home/internasional.json',  $internasional);
        
        $olahraga = Berita::where('kategori','olahraga')
        ->orderBy('time', 'desc')
        ->take(3)
        ->get()
        ->toJson();
        Storage::put('json/home/olahraga.json',  $olahraga);
        
        $politik = Berita::where('kategori','politik')
        ->orderBy('time', 'desc')
        ->take(3)
        ->get()
        ->toJson();
        Storage::put('json/home/politik.json',  $politik);
        
		$views = Berita::where('time','>', $time-(3600*2*24))
        ->orderBy('views', 'desc')
        ->take(5)
        ->get();
		
		$sidebar = [
			'views' => $views,
		];
		
        Storage::put('json/sidebar/sidebar.json',  json_encode($sidebar));
        
    }
    
	 
    public function index(Request $request) {
        
        $data = [
            'berita_pilihan' => json_decode(Storage::get('json/home/berita_pilihan.json')),
            'berita_terbaru' => json_decode(Storage::get('json/home/berita_terbaru.json')),
            'berita' => json_decode(Storage::get('json/home/berita.json')),
            'internasional' => json_decode(Storage::get('json/home/internasional.json')),
            'politik' => json_decode(Storage::get('json/home/politik.json')),
            'olahraga' => json_decode(Storage::get('json/home/olahraga.json')),
            'galeri' => json_decode(Storage::get('json/home/galeri.json')),
            'sidebar' => json_decode(Storage::get('json/sidebar/sidebar.json')),
        ];
        return view('portal.index', $data);
        
    }
    
	public function kategori(Request $request, $kategori) {
	
		$query = null;
		
		if($kategori == 'lainnya'){
			$kate = ['berita','News','internasional','Bbc-world','teknologi','Tekno','hiburan','Entertainment','ekonomi','olahraga','Nasional','politik','Gaya Hidup'];
			$query = Berita::whereNotIn('kategori',$kate);
		}else{
			$query = Berita::where('kategori',$kategori);
			if(strtolower($kategori) == 'berita' ){
				$query = $query->orWhere('kategori', 'News');
			}else if(strtolower($kategori) == 'internasional' ){
				$query = $query->orWhere('kategori', 'Bbc-world');
			}else if(strtolower($kategori) == 'teknologi' ){
				$query = $query->orWhere('kategori', 'Tekno');
			}else if(strtolower($kategori) == 'hiburan' ){
				$query = $query->orWhere('kategori', 'Entertainment');
			}
		}
		
		$query = $query->orderBy('time', 'desc')
		->paginate(12);
		
		$Data = $query->toArray();
		$data = [
			'data' => $Data['data'],
			'pagination' => $query,
			'title' => 'Kategori: '.$kategori,
            'sidebar' => json_decode(Storage::get('json/sidebar/sidebar.json')),
        ];
		return view('portal.list', $data);
	}
	
	public function terbaru(Request $request) {
	
		$query = Berita::orderBy('time', 'desc');
		$title = 'Berita Terbaru';
		$q= '';
		if($request->q){
            $query = $query->where('title','like','%' .$request->q. '%')
                    ->orWhere('konten','like','%' .$request->q. '%');
			$title = 'Cari: '.$request->q;
			$q = $request->q;
        }
        $query = $query->paginate(12);
		
		$Data = $query->toArray();
		$data = [
			'data' => $Data['data'],
			'pagination' => $query,
			'title' => $title,
			'q' => $q,
            'sidebar' => json_decode(Storage::get('json/sidebar/sidebar.json')),
        ];
		return view('portal.list', $data);
	}
	
	public function terpopuler(Request $request) {
	
		$query = Berita::orderBy('views', 'desc');
		$title = 'Banyak dibaca';
		
        $query = $query->paginate(12);
		
		$Data = $query->toArray();
		$data = [
			'data' => $Data['data'],
			'pagination' => $query,
			'title' => $title,
            'sidebar' => json_decode(Storage::get('json/sidebar/sidebar.json')),
        ];
		return view('portal.list', $data);
	}
   
    public function show(Request $request, $time, $title) {
        $query = Berita::where('time',$time)->first();
        
        if(!$query){
            return redirect('/');
        }
       
        $query->views = $query->views+1;
        $query->save();
		
		$terkait = Berita::whereNotIn('id',[$query->id])
		->where('kategori',$query->kategori)
		->orderBy(DB::raw('RAND()'))
		->take(4)
        ->get();
		
        $data = [
            'terkait' => $terkait,
            'data' => $query,
			'sidebar' => json_decode(Storage::get('json/sidebar/sidebar.json')),
        ];
        return view('portal.single', $data);
        
    }
    
    public function store(Request $request) {
        $redirect_error = url()->previous();
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'pertanyaan_id' => 'required',
            'jawaban' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect($redirect_error)
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $user = User::where('email',$request->email)->first();
        if(!$user){
            $user = new User();
            $user->email = $request->email;
            $user->name = 'Guest';
            $user->password = bcrypt($this->random_password());
            $user->save();
        }
//        dd('ss');
        $query = new Jawaban();
        $query->waktu = time();
        $query->pertanyaan_id = $request->pertanyaan_id;
        $query->jawaban = $request->jawaban;
        $query->user_id = $user->id;
        $query->save();
                
        return $this->show($request, $request->pertanyaan_id);
    }
    
    public function views() {
        $views = Berita::select(DB::raw("SUM(views) as count"))
	    	    ->get();
				
		$count_berita = Berita::count();
		
		$list = DB::table("listurl")
	    ->select(DB::raw("count(*) as count"))
	    ->get();
				
		$data = [
			'views' => $views,
			'jml_berita' => $count_berita,
			'list' => $list,
		];
		return response()->json($data);
    }
}
