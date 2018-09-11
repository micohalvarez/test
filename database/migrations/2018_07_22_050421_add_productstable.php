<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('concept');
            $table->string('overview');
            $table->string('feature');
            $table->string('image');
            $table->string('zoomedImage');            
            $table->string('mobileImage');
            $table->string('monitorImage');
            $table->string('conceptImage1');            
            $table->string('conceptImage2');
            $table->string('conceptImage3');
            $table->string('conceptImage4');
            $table->string('featureImage');
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
    }
}
