<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fines', function (Blueprint $table) {
            $table->id();

            $table->string('user_id')->unique();
            $table->date('birthday')->nullable();
            $table->string('hometown');
            $table->integer('phone');
            $table->string('position')->comment('Chức vụ');
            $table->unsignedBigInteger('department')->comment('Phòng ban');
            $table->date('datestart');
            $table->unsignedSmallInteger('status')->default(1)->comment("0: inactive, 1: active");
            $table->unsignedBigInteger('isadmin')->nullable();
            $table->foreign('department')->references('id')->on('departments');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fines');
    }
};
