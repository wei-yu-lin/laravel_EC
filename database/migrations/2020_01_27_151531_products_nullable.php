<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function ($table) {
          
            $table->string('name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->float('price')->nullable()->change();
            $table->string('imageurl')->nullable()->change();
            $table->string('file_id')->nullable()->change();
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function ($table) {
            
            $table->string('name')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
            $table->float('price')->nullable(false)->change();
            $table->string('imageurl')->nullable(false)->change();
            $table->string('file_id')->nullable(false)->change();
        
        });
    }
}