<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->uuid('id')->primary();
            //$table->text('data')->nullable();
            $table->string('location');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('term');
            $table->integer('radius');
            $table->text('categories')->nullable();
            $table->string('locale');
            $table->integer('price');
            $table->string('review_count');
            $table->string('rating');
            $table->boolean('open_now');
            $table->integer('open_at');
            $table->text('attributes');
            $table->string('device_platform');
            $table->string('reservation_date');
            $table->string('reservation_time');
            $table->integer('reservation_covers');
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
        Schema::dropIfExists('business');
    }
}
