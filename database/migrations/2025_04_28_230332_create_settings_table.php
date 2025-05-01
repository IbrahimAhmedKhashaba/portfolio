<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 255);
            $table->string('email' , 255);
            $table->string('phone' , 255);
            $table->date('birthdate');
            $table->string('address' , 255);
            $table->string('position' , 255);
            $table->string('cv' , 255);
            $table->string('location');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('github');

            $table->decimal('hours_worked');
            $table->decimal('client_count');
            $table->decimal('cofe_drinked');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
