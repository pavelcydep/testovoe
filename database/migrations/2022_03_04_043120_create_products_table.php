<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'pgsql';

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
         
            $table->increments('id');
            $table->char('article',255);
            $table->char('name',255);
            $table->char('status',255);
            $table->jsonb('data')->nullable($value = true);
            $table->timestamps();
           
    } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
