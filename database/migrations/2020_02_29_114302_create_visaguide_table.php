<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaguideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visaguide', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('short_description');
            $table->integer('country_id');
            $table->integer('purpose_id');
            $table->longText('detailed_description');
            $table->string('success_rate');
            $table->boolean('can_apply_online');
            $table->string('apply_online_link_id');
            $table->string('instructions');
            $table->boolean('active');
            $table->string('order');
            $table->boolean('is_evisa');
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
        Schema::dropIfExists('visaguide');
    }
}
