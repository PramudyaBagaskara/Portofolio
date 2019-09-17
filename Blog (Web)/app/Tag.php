<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';
    public function blog(){
        return $this->BelongsToMany('App\Blog');
    }
}
