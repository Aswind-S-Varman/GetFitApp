<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Gender')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Height')->nullable();
            $table->string('Muscle_Focus')->nullable();
            $table->string('Health_Problem')->nullable();
            $table->string('Purpose')->nullable();
            $table->string('Location')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
