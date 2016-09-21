<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ebarcaberita;
use DB;
use Storage;
//use Request;


class ApiEbarcaController extends Controller
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
    
        $query = Ebarcaberita::select('id','title','time','img_tumb','penulis','sumber','url','kategori','waktu');
	$query = $query->orderBy('time', 'desc')->paginate(12);
        return $this->sendData($query);
        
    }
    
	
    public function show(Request $request, $time) {
        $query = Ebarcaberita::where('time',$time)->first();

		//$terkait = Ebarcaberita::whereNotIn('id',[$query->id])
		//->select('id','title','time','img_tumb','penulis','sumber','url','kategori','waktu')
		//->orderBy(DB::raw('RAND()'))
		//->take(4)
        //->get();
		
		$query->konten = str_replace('</p>', "</p>\n\n ", $query->konten);
		$query->konten = str_replace('<br>', "<br>\n", $query->konten);

		$query->konten = strip_tags($query->konten);
		$query->konten = trim(str_replace("  "," ",$query->konten));


        $data = [
            'detil' => $query,
			'terkait' => [],
        ];
       return $this->sendData($data);
        
    }
	
	
    
}
