<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tai_khoan', 'password', 'ho_ten','sdt','dia_chi','phan_quyen',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function DSUser(){
        return User::all();
    }
    function FindUser($id){
        return User::find($id);
    }
    function CreateUser($data){
        DB::table('users')->insert([
            'tai_khoan' => $data['tai_khoan'],
            'password' => bcrypt($data['password']),
            'ho_ten' => $data['ho_ten'],
            'sdt' => $data['sdt'],
            'dia_chi' => $data['dia_chi'],
            'phan_quyen' => true
        ]);
    }
    function UpdateUser($data,$id){
        $user = DB::table('users')
              ->where('id', $id)
              ->update([
                'tai_khoan' => $data['tai_khoan'],
                'ho_ten' => $data['ho_ten'],
                'sdt' => $data['sdt'],
                'dia_chi' => $data['dia_chi'],
                'phan_quyen' => $data['phan_quyen'],
              ]);
    }
    function UpdateActive($id){
        $userup = FindUser($id);
        $data = false;
        if($userup->phan_quyen == false)
            $data = true;
        $user = DB::table('users')
            ->where('id', $id)
            ->update([
              'phan_quyen' => $data,
            ]);
    }
    function DeleteUser($id){
        $user =DB::table('users')->where('id', $id)->delete();
    }
}
