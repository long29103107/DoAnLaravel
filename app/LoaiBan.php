<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiBan extends Model
{
    protected $table = 'loaibans';

    public function ban()
    {
        return $this->hasMany('App\Ban','id_loai_ban','id');
    }

    function DSLoaiBan(){
        return LoaiBan::all();
    }
    function FindLoaiBan($id){
        return LoaiBan::find($id);
    }
}
