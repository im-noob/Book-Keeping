<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;

    public function userList(){
        return $this->belongsToMany('App\userList','foregin_key');
    }

}
