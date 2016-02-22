<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('kupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode');
            $table->integer('approved')->default(0);  // Voucher approved by admin
            $table->integer('activated')->default(0);
            $table->integer('period');
            $table->dateTime('activated_at')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('kupons');
    }
}
