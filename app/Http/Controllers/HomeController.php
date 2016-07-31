<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;


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
        
//        $limit = $request->limit ? $request->limit : 3;
     
        $berita_pilihan = Berita::where('is_pilihan',1)
        ->orderBy('time', 'desc')
        ->take(4)
        ->get();
        
        $berita_terbaru = Berita::orderBy('time', 'desc')
        ->take(3)
        ->get();
        
//        dd($berita_pilihan);
        
        $data = [
            'berita_pilihan' => $berita_pilihan,
            'berita_terbaru' => $berita_terbaru,
        ];
        return view('portal.index', $data);
        
    }
    
    public function tags(Request $request,$tag) {
        
        $limit = $request->limit ? $request->limit : 10;
     
        $query = Pertanyaan::with('tags','jawabanCount')
                ->join('tags', 'tags.pertanyaan_id', '=', 'pertanyaan.id')
                ->join('users', 'pertanyaan.user_id', '=', 'users.id')
                ->select('pertanyaan.*','users.id as user_id','users.name','users.email')
                ->orderBy('pertanyaan.id', 'desc')
                ->where('tags.tag','=',$tag);
        if($request->q){
            $query = $query->where('judul','like','%' .$request->q. '%')
                    ->orWhere('pertanyaan','like','%' .$request->q. '%');
        }
        
        $query = $query->paginate($limit);
        
        $Data = $query->toArray();
//        dd($Data);
        $page = $request->page ? $request->page : 1;
        $no = ($page-1) * $limit + 1;
        
        $data = [
            'data' => $Data['data'],
            'pagination' => $query,
            'url_search' => '/pertanyaan/tags/'.$tag,
            'q' => $request->q ? $request->q : '',
            'no' => $no,
        ];
        return view('home', $data);
        
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
