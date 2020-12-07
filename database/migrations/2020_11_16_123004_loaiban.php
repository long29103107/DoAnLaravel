<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Loaiban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaibans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_loai');
            $table->integer('so_luong_ghe');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();$table->engine='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaibans');
    }
}
