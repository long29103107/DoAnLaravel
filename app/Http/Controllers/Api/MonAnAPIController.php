<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LoaiMonAn;
use App\MonAn;
use DB;
class MonAnAPIController extends Controller
{
    public function MonAn()
    {
        $data = DB::table('monans')->join('loaimonans','monans.id_loai_mon_an','=','loaimonans.id')->get();
        return response()->json(['dulieu'=>$data]);
    }
    public function TimMonAn($id)
    {
        $MonAn = new MonAn;
        $data = $MonAn ->Find($id);
        return response()->json(['dulieu'=>$data]);
    }
    public function HinhAnh()
    {
        $data = DB::table('monans')->select('hinh_anh')->get();
        return response()->json(['dulieu'=>$data]);
    }
    public function LoaiMonAn()
    {
        $LoaiMonAn=LoaiMonAn::all();
        $data;
        foreach($LoaiMonAn as $value){
            $MonAn = MonAn::where('id_loai_mon_an', '=', $value->id)->get();    
            $data[]=[
                'id'=>$value->id,
                'ten_loai'=>$value->ten_loai,
                'MonAns'=>$MonAn
            ];
        }
        return response()->json(['dulieu'=>$data]);
    }
}
