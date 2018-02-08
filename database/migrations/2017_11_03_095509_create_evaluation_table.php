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
            $table->text('products')->nullable();
            $table->text('goal')->nullable();
            $table->text('competitors')->nullable();
            $table->text('makeCompanyBeter')->nullable();
            $table->text('goalsOfTheWebsite')->nullable();
            $table->text('anders')->nullable();

            $table->text('reasonMakeWebsite')->nullable();
            $table->text('oldBadWebsites')->nullable();
            $table->text('visitor')->nullable();
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
