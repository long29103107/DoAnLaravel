<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1;$i<6;$i++){
            DB::table('users')->insert([
                'tai_khoan' => 'user'.$i,
                'password' => bcrypt('password'.$i),
                'ho_ten' => 'Nguyễn Văn A',
                'sdt' => '034406638'.$i,
                'dia_chi' => 'Huỳnh Thúc Kháng '.$i,
                'phan_quyen' => false,
            ]);
        }
    }
}
