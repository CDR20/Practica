<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\TextUI\XmlConfiguration\Groups;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('key', 8)->unique()->nullable(true);
            $table->string('name', 100)->nullable(true);
            $table->string('mail', 50)->unique()->nullable(true);
            $table->string('password', 12)->nullable(true);
            $table->boolean('status')->default(true)->nullable(true);
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
