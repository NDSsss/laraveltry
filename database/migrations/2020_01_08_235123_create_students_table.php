<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('vk_profile_link');
            $table->bigInteger('vk_profile_id')->unique();
            $table->string('facebook_profile_link');
            $table->bigInteger('facebook_profile_id')->unique();
            $table->string('instagram_profile_link');
            $table->bigInteger('instagram_profile_id')->unique();
            $table->string('photo_link');
            $table->string('extra_info');
            $table->string('push_token');
            $table->integer('barcode_id')->unique();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
