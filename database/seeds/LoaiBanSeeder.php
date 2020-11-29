<?php

use Illuminate\Database\Seeder;

class LoaiBanSeeder extends Seeder
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
        DB::table('loaibans')->insert([
            'ten_loai' => 'Bàn '.$i,
            'so_luong_ghe' => $i + 10,
        ]);
        }
    }
}
