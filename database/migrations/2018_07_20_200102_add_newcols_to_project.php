<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewcolsToProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('projects', function (Blueprint $table) {
            //
            $table->string('zoomedImage')->after('image');            
            $table->string('mobileImage')->after('zoomedImage');
            $table->string('monitorImage')->after('mobileImage');
            $table->string('conceptImage1')->after('monitorImage');            
            $table->string('conceptImage2')->after('conceptImage1');
            $table->string('conceptImage3')->after('conceptImage2');
            $table->string('conceptImage4')->after('conceptImage3');
            $table->string('featureImage')->after('conceptImage4');
            
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
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
