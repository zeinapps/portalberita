<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Pertanyaan
 *
 * @author Zein
 */

use Illuminate\Database\Eloquent\Model;

class Berita extends Model {

    protected $table = 'berita';
    protected $fillable = ['id','url', 'title','konten','kategori','penulis','sumber','waktu','time','img','img_tumb','is_pilihan'];
    protected $primaryKey = 'id';
    public $timestamps = false;

//    public function jawaban()
//    {
//        return $this->hasMany('App\Jawaban');
//    }
//    
//    public function jawabanCount()
//    {
//        return $this->hasOne('App\Jawaban')
//          ->selectRaw('pertanyaan_id, count(*) as count')
//          ->groupBy('pertanyaan_id');
//    }
//    
//    public function jawabanUserAll()
//    {
//        return $this->hasMany('App\Jawaban')
//          ->join('users', 'jawaban.user_id', '=', 'users.id')
//          ->orderBy('jawaban.id','desc');
//
//    }
//    
//    public function tags()
//    {
//        return $this->hasMany('App\Tags');
//    }
}

