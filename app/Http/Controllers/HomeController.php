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
    public function index(Request $request) {
        

        
//        $berita_terbaru = Berita::orderBy('time', 'desc')
//        ->take(3)
//        ->get()
//        ->toJson();
//        Storage::put('json/home/berita_terbaru.json',  $berita_terbaru);
//        
//        $berita = Berita::where('kategori','berita')
//        ->orderBy('time', 'desc')
//        ->take(3)
//        ->get()
//        ->toJson();
//        Storage::put('json/home/berita.json',  berita);
//        
//        $galeri = Berita::select('img_tumb','url','time','title')
//        ->orderBy(DB::raw('RAND()'))
//        ->take(8)
//        ->get()
//        ->toJson();
//        Storage::put('json/home/galeri.json',  $galeri);
//        
//        $internasional = Berita::where('kategori','internasional')
//        ->orderBy('time', 'desc')
//        ->take(4)
//        ->get()
//        ->toJson();
//        Storage::put('json/home/internasional.json',  $internasional);
//        
//        $olahraga = Berita::where('kategori','olahraga')
//        ->orderBy('time', 'desc')
//        ->take(4)
//        ->get()
//        ->toJson();
//        Storage::put('json/home/olahraga.json',  $olahraga);
//        
//        $politik = Berita::where('kategori','politik')
//        ->orderBy('time', 'desc')
//        ->take(4)
//        ->get()
//        ->toJson();
//        Storage::put('json/home/politik.json',  $politik);
        
        $data = [
            'berita_pilihan' => json_decode(Storage::get('json/home/berita_pilihan.json')),
            'berita_terbaru' => json_decode(Storage::get('json/home/berita_terbaru.json')),
            'berita' => json_decode(Storage::get('json/home/berita.json')),
            'internasional' => json_decode(Storage::get('json/home/internasional.json')),
            'politik' => json_decode(Storage::get('json/home/politik.json')),
            'olahraga' => json_decode(Storage::get('json/home/olahraga.json')),
            'galeri' => json_decode(Storage::get('json/home/galeri.json')),
        ];
        return view('portal.index', $data);
        
    }
    
    public function generateJsonHome() {
        
        $berita_pilihan = Berita::where('is_pilihan',1)
        ->orderBy('time', 'desc')
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
        ->take(8)
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
        ->take(4)
        ->get()
        ->toJson();
        Storage::put('json/home/olahraga.json',  $olahraga);
        
        $politik = Berita::where('kategori','politik')
        ->orderBy('time', 'desc')
        ->take(4)
        ->get()
        ->toJson();
        Storage::put('json/home/politik.json',  $politik);
        
        
    }
    
    public function show(Request $request, $id) {
        $query = Pertanyaan::with('tags','jawabanUserAll','jawabanCount')
                ->join('users', 'pertanyaan.user_id', '=', 'users.id')
                ->select('pertanyaan.*','users.id as user_id','users.name','users.email')
                ->find($id);
        
        if(!$query){
            return redirect('home');
        }
        
        $query->views = $query->views+1;
        $query->save();
        $data = [
            'data' => $query->toArray(),
        ];
        return view('show', $data);
        
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
    
    public function tes() {
        $data = [
                    'error' => 'tes email',
                ];
                Mail::send('emailbug',$data, function ($m) {
                        $m->to('zein@jayantara.co.id', 'Zein')->subject('Error 7Ready.com');
                });
        return redirect('home');      
    }
}
