<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiBan;

class TableLoaiBanController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loaiban = new LoaiBan;
        $dsloaiban = $loaiban -> DSLoaiBan();
        $data = ['dsloaiban'=>$dsloaiban];
        return view("loaiban.index",$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("loaiban.create");
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

        $loaiban = new LoaiBan;
        $loaiban->ten_loai = $request->tenloaiban;
        $loaiban->so_luong_ghe = $request->soluongghe;
        $loaiban->save();
        return redirect()->route('TableLoaiBan.index');
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
        $loaiban = new LoaiBan;
        $loaiban = $loaiban->FindLoaiBan($id);
        return view("loaiban.delete",$loaiban);
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
        $loaiban = new LoaiBan;
        $data = $loaiban ->FindLoaiBan($id);
        return view("loaiban.update",$data);
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
        $loaiban = new LoaiBan;
        $data = $loaiban ->FindLoaiBan($id);
        $loaiban->ten_loai = $request->tenloaiban;
        $loaiban->so_luong_ghe = $request->soluongghe;
        $loaiban->save();
        return redirect()->route('TableLoaiBan.index');
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
        $loaiban = new LoaiBan;
        $data = $loaiban ->FindLoaiBan($id);
        $data->delete();
        return redirect()->route('TableLoaiBan.index');
    }
}
