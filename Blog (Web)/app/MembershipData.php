<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipData extends Model
{
    protected $table = 'member';

    public  function membershipdata(){
        return $this->belongsTo('App\Member');
    }
}
