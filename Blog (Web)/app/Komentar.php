<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komen';

    public function blog(){
        return $this->belongsTo('App\Blog', 'komenid');
    }
}
