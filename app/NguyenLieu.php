<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguyenLieu extends Model
{
    //
    protected $table = 'nguyenlieus';

    public function hoadonnhaps()
    {
        return $this->belongsToMany('App\HoaDonNhap','chitiethoadonnhaps','id_nguyen_lieu','id_hoa_don_nhap');
    }
    function DSNguyenLieu(){
        return NguyenLieu::all();
    }
    function FindNguyenLieu($id){
        return NguyenLieu::find($id);
    }
}
