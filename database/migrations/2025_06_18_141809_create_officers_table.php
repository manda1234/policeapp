<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficersTable extends Migration
{
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('badge_number')->unique(); 
            $table->string('rank'); 
            $table->string('assigned_area'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('officers');
    }
}