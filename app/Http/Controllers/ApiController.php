<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\View;
use DB;
use Storage;
//use Request;


class ApiController extends Controller
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
	 
    public function index(Request $request) {
        
        $data = [
            'berita_pilihan' => json_decode(Storage::get('json/home/berita_pilihan.json')),
            'berita_terbaru' => json_decode(Storage::get('json/home/berita_terbaru.json')),
            'berita' => json_decode(Storage::get('json/home/berita.json')),
            'internasional' => json_decode(Storage::get('json/home/internasional.json')),
            'politik' => json_decode(Storage::get('json/home/politik.json')),
            'olahraga' => json_decode(Storage::get('json/home/olahraga.json')),
           
        ];
        return $this->sendData($data);
        
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
		$query = $query->select('id','title','time','img_tumb','penulis','sumber','url','kategori','waktu');
		$query = $query->orderBy('time', 'desc')
		->paginate(12);
		
		return $this->sendData($query);
	}
	
	public function trending(Request $request) {
		$time = time();
		$query = Berita::where('time','>', $time-(3600*1*24))->orderBy('views', 'desc')
		->select('id','title','time','img_tumb','penulis','sumber','url','kategori','waktu')->paginate(12);
		
		return $this->sendData($query);
	}
	
    public function show(Request $request, $time) {
        $query = Berita::where('time',$time)->first();

		$terkait = Berita::whereNotIn('id',[$query->id])
		->where('kategori',$query->kategori)
		->select('id','title','time','img_tumb','penulis','sumber','url','kategori','waktu')
		->orderBy(DB::raw('RAND()'))
		->take(4)
        ->get();
		
		$query->konten = strip_tags($query->konten);
		$query->konten = trim(str_replace("  "," ",$query->konten));
        $data = [
            'detil' => $query,
			'terkait' => $terkait,
        ];
       return $this->sendData($data);
        
    }
	
     public function updateview(Request $request) {
        $time = time();
        $tgl = date("Y-m-d", $time);
        $view = null;
        if($request->ajax()){
            $view = View::find($tgl);
            if(!$view){
                $view = View::create(['tgl'=>$tgl,'jumlah'=>1]);
            }else{
                View::where('tgl',$tgl)
                        ->update(['jumlah'=> $view->jumlah+1] );
            }
        }
        
        $data = [
                'views' => $view,
        ];
        return response()->json($data);
    }
    
}
