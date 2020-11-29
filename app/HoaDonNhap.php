<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonNhap extends Model
{
    //
    protected $table = 'hoadonnhaps';

    public function nguyenlieus()
    {
        return $this->belongsToMany('App\NguyenLieu','chitiethoadonnhaps','id_hoa_don_nhap','id_nguyen_lieu');
    }
    public function nhacungcap()
    {
        return $this->hasOne('App\NhaCungCap','id_nha_cung_cap','id');
    }
}
