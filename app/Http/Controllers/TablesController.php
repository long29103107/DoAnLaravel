<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\NguyenLieu;
use App\LoaiBan;
use App\Ban;
use App\HoaDon;
use App\HoaDonNhap;
use App\LoaiMonAn;
use App\MonAn;
use App\NhaCungCap;
use Config;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = new User;
        $dsuser = $user -> DSUser();

        $nguyenlieu = new NguyenLieu;
        $dsnguyenlieu = $nguyenlieu -> DSNguyenLieu();

        $loaiban = new LoaiBan;
        $dsloaiban = $loaiban -> DSLoaiBan();

        $ban = new Ban;
        $dsban = $ban -> DSBan();

        $loaimonan = new LoaiMonAn;
        $dsloaimonan = $loaimonan -> DSLoaiMonAn();

        $monan = new MonAn;
        $dsmonan = $monan -> DSMonAn();

        $nhacungcap = new NhaCungCap;
        $dsnhacungcap = $nhacungcap -> DSNhaCungCap();

        $data = ['dsuser' => $dsuser,
                'dsnguyenlieu' => $dsnguyenlieu,
                'dsloaiban' => $dsloaiban,
                'dsban' => $dsban ,
                'dsloaimonan' => $dsloaimonan,
                'dsmonan' => $dsmonan,
                'dsnhacungcap' => $dsnhacungcap ];
        return view(Config::get('paths.path.admin').".tables",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
