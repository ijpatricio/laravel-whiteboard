<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_whiteboards', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
        });
    }
};
