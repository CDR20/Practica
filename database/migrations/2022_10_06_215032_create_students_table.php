<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('key', 10)->unique();
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            $table->string('password', 100);
            $table->boolean('status')->default(true);
            // $table->unsignedBigInteger('group_id');
            $table->foreignId('group_id')->constrained()->nullable(true);
            $table->timestamps();

            // $table->foreign('group_id')->references('id')->on('groups');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};