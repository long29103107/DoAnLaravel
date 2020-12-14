<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
class TableUserController extends Controller
{
    public function getLogin()
    {
        return view('login');//return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'tai_khoan' => $request->taikhoan,
            'password' => $request->password,
        ];
        if ($request->remember == true) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không

        if (Auth::guard('user')->attempt($arr)) {
            return redirect()->intended('dashboard');
        } else {
            echo "Tài khoản hoặc mật khẩu không chính xác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
    }
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
        $user = new User;
        $user1 = new User;
        $user->tai_khoan = $request->taikhoan;
        $user->password = bcrypt($request->password);
        $user->ho_ten = $request->hoten;
        $user->sdt = $request->sodienthoai;
        $user->dia_chi = $request->diachi;
        $user->phan_quyen = $request->phanquyen;
        $user->khoa= false;
        $user->save();
        return redirect()->route('TableUser.index');
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
        $data = $user ->FindUser($id);
        $data->tai_khoan = $request->taikhoan;
        $data->password = bcrypt($request->password);
        $data->ho_ten =$request->hoten;
        $data->sdt =$request->sodienthoai;
        $data->dia_chi=$request->diachi;
        $data->phan_quyen=$request->phanquyen;
        $data->khoa= false;
        $data->save();
        return redirect()->route('TableUser.index');
    }

    public function showactive($id)
    {
        //
        $user = new User;
        $user = $user->FindUser($id);
        return view("user.active",$user);
    }

    public function active($id){
        $user = User :: find($id);
        if($user->khoa == false)
            $datakhoa =true;
        else $datakhoa = false;
        $data = DB::table('users')
        ->where('id', $user->id)
        ->update(['khoa' => $datakhoa]);
        return redirect()->route('TableUser.index');
    }
    /**
     *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = new User;
        $data = $user ->FindUser($id);
        $data->delete();
        return redirect()->route('TableUser.index');
    }
}
