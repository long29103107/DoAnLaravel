<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiMonAn extends Model
{
    //
    protected $table = 'loaimonans';

    public function monan()
    {
        return $this->hasMany('App\MonAn','id_loai_mon_an','id');
    }
    function DSLoaiMonAn(){
        return LoaiMonAn::all();
    }
    function FindLoaiMonAn($id){
        return LoaiMonAn::find($id);
    }
}
