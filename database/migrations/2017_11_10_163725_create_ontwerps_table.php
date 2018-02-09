<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOntwerpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ontwerps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->text('apperance')->nullable();
            $table->text('corporateIdentity')->nullable();
            $table->text('website1')->nullable();
            $table->text('website2')->nullable();
            $table->text('website3')->nullable();
            $table->text('mooiWebsite1')->nullable();
            $table->text('mooiWebsite2')->nullable();
            $table->text('mooiWebsite3')->nullable();
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
        Schema::dropIfExists('ontwerps');
    }
}
