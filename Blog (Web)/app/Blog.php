<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function kategori(){

        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    public function tag(){

        return $this->belongsToMany('App\Tag');
    }
}
