<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInhoudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inhouds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('advices')->nullable();
            $table->text('newRegular')->nullable();
            $table->text('socialMedia')->nullable();
            $table->text('pages')->nullable();
            $table->text('moreLanguages')->nullable();
            $table->text('seoSearch')->nullable();
            $table->text('anders')->nullable();
            $table->text('functions')->nullable();
            $table->text('vElement')->nullable();
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
        Schema::dropIfExists('inhouds');
    }
}
