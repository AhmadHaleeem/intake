<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnieksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technieks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->text('linkTheEmail')->nullable();
            $table->text('newEmailAddress')->nullable();
            $table->text('offTheWebsite')->nullable();
            $table->text('budget')->nullable();
            $table->string('selfDo')->nullable();
            $table->string('beeldrTakesCMS')->nullable();
            $table->string('beeldrOnlineMarketing')->nullable();
            $table->text('siteStatistics')->nullable();
            $table->text('timeOfSuccess')->nullable();
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
        Schema::dropIfExists('technieks');
    }
}
