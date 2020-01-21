<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakeDataGeneratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('category_name');
            $table->string('category_id');
            $table->text('description')->nullable();
            $table->string('picture');
            $table->integer('quantity')->defult(1);
            $table->integer('price');
            $table->tinyInteger('status')->default(0);
            $table->integer('offer_price');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fake_data_generators');
    }
}
