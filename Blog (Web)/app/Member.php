<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'data_member';

    public  function member(){
        return $this->belongsTo('App\MembershipData');
    }
}
