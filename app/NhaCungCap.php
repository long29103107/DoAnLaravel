<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    //
    protected $table = 'nhacungcaps';

    public function hoadonnhap()
    {
        return $this->hasMany('App\HoaDonNhap','id_nhacungcap','id');
    }
    function DSNhaCungCap(){
        return NhaCungCap::all();
    }
    function FindNhaCungCap($id){
        return NhaCungCap::find($id);
    }
}
