<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evaluations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->text('products');
            $table->text('goal');
            $table->text('competitors');
            $table->text('makeCompanyBeter');
            $table->text('goalsOfTheWebsite')->nullable();
            $table->text('anders')->nullable();

            $table->text('reasonMakeWebsite');
            $table->text('oldBadWebsites');
            $table->text('visitor');
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
        Schema::dropIfExists('evaluation');
    }
}
