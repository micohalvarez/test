<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('concept');
            $table->string('overview');
            $table->string('feature');
            $table->string('image');
            $table->string('zoomedImage')->after('image');            
            $table->string('mobileImage')->after('zoomedImage');
            $table->string('monitorImage')->after('mobileImage');
            $table->string('conceptImage1')->after('monitorImage');            
            $table->string('conceptImage2')->after('conceptImage1');
            $table->string('conceptImage3')->after('conceptImage2');
            $table->string('conceptImage4')->after('conceptImage3');
            $table->string('featureImage')->after('conceptImage4');
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
        Schema::dropIfExists('products');
    }
}
