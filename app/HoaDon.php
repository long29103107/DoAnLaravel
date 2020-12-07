<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HoaDon extends Model
{
    //
    use SoftDeletes;
    protected $table = 'hoadons';
    // public function monans()
    // {
    //     return $this->belongsToMany('App\MonAn','chitiethoadons','id_hoa_don','id_mon_an')->withPivot('so_luong', 'don_gia');
    // }
    public function chitiethoadon()
    {
        return $this->hasMany('App\ChiTietHoaDon','id_loai_mon_an','id');
    }
    function DSHoaDon(){
        $hoadon = HoaDon::all();
        return $hoadon;
    }
    function FindHoaDon($id){
        return HoaDon::find($id);
    }
}
