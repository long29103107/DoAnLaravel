<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    //
    protected $table = 'hoadons';
    public function monan()
    {
        return $this->belongsToMany('App\MonAn','chitiethoadons','id_hoa_don','id_mon_an');
    }
}
