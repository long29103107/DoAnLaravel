<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class TableUserController extends Controller
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
        $data = ['dsuser'=>$dsuser];
        return view("user.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("user.create");
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
        $user = new User;
        $userdata = ["tai_khoan"=>$request->taikhoan,
                "password"=>$request->password,
                "ho_ten"=>$request->hoten,
                "sdt"=>$request->sodienthoai,
                "dia_chi"=>$request->diachi,
                "phan_quyen"=>$request->phanquyen];
        $user->CreateUser($userdata);
        $dsuser = $user -> DSUser();
        $data = ['dsuser'=>$dsuser];
        return view("user.index",$data);
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
        $user = new User;
        $user = $user->FindUser($id);
        return view("user.delete",$user);
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
        $user = new User;
        $data = $user ->FindUser($id);
        return view("user.update",$data);
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
        $user = new User;
        $user->tai_khoan = $request->taikhoan;
        $user->ho_ten =$request->hoten;
        $user->sdt =$request->sodienthoai;
        $user->dia_chi=$request->diachi;
        $user->phan_quyen=$request->phanquyen;
        $updateuser = new User;
        $updateuser->UpdateUser($user,$id);
        $dsuser = $user -> DSUser();
        $data = ['dsuser'=>$dsuser];
        return view("user.index",$data);
    }
    // public function updateActive($id)
    // {
    //     //
    //     $user = new User;
    //     $updateuser->UpdateActive($id);
    //     $dsuser = $user -> DSUser();
    //     $data = ['dsuser'=>$dsuser];
    //     return view("user.index",$data);
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = new User;
        $data = $user ->DeleteUser($id);
        $dsuser = $user -> DSUser();
        $data = ['dsuser'=>$dsuser];
        return view("user.index",$data);
    }
}
