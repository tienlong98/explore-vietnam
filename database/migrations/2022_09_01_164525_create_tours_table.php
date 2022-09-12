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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('short_descripsition')->nullable();
            $table->text('descripsition');
            $table->date('departure_date')->nullable();;
            $table->decimal('regular_price');
            $table->decimal('sale_price')->nullable();
            $table->string('qty');
            $table->boolean('featured')->default(false);
            $table->boolean('trending')->default(false);
            $table->string('image')->nullable();
            $table->bigInteger('cate_id')->unsigned()->nullable();
            $table->bigInteger('car_id')->unsigned()->nullable();
            $table->bigInteger('hotel_id')->unsigned()->nullable();

            $table->timestamps();
            // $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
};
