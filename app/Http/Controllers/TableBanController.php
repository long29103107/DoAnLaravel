<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ban;
use App\LoaiBan;

class TableBanController extends Controller
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
        $ban = new Ban;
        $dsban = $ban -> DSBan();
        $data = ['dsban'=>$dsban];
        return view("ban.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $loaiban = new LoaiBan;
        $dsloaiban = $loaiban ->DSLoaiBan();
        $data = ['dsloaiban'=>$dsloaiban];
        return view("ban.create",$data);
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
        $ban = new Ban;
        $ban->so = $request->soban;
        $ban->id_loai_ban = $request->idloaiban;
        $ban->save();
        return redirect()->route('TableBan.index');
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
        $ban = new Ban;
        $databan = $ban -> FindBan($id);
        $loaiban = new LoaiBan;
        $dataloaiban = $loaiban -> FindLoaiBan($databan->id_loai_ban);
        $data = ['databan'=>$databan,'dataloaiban'=>$dataloaiban];
        return view('ban.delete',$data);
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
        $dsloaiban = $loaiban ->DSLoaiBan();
        $ban = new Ban;
        $loaiban1 = new LoaiBan;
        $data = ['ban' =>$ban->FindBan($id),'dsloaiban'=>$dsloaiban,'loaiban'=>$loaiban->FindLoaiBan($ban->FindBan($id)->id_loai_ban)];
        return view("ban.update",$data);
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
        $ban = new Ban;
        $data = $ban ->FindBan($id);
        $data->so = $request->soban;
        $data->id_loai_ban = $request->idloaiban;
        $data->save();
        return redirect()->route('TableBan.index');
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
        $ban = new Ban;
        $data = $ban ->FindBan($id);
        $data->delete();
        return redirect()->route('TableBan.index');
    }
}
