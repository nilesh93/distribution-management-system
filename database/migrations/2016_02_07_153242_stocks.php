<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        
        Schema::create('stocks', function(Blueprint $table){
            $table->increments('id');
            $table->integer('stock_main_id')->nullable();
            $table->integer('sub_product_id')->nullable();
            $table->integer('initial')->nullable();
            $table->integer('available')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->default('ACTIVE');
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
        //
        
          Schema::drop('stocks');
    }
}
