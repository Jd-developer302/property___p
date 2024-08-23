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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_state_id');
            $table->string('title');
            $table->string('name');
            $table->string('slug');
            $table->tinyInteger('status');
            $table->decimal('total_area', 10, 2)->nullable(); 
            $table->decimal('density', 10, 2)->nullable(); 
            $table->integer('population')->nullable(); 
            $table->text('description')->nullable(); 
            $table->string('image')->nullable(); 
            $table->timestamps();

            $table->foreign('country_state_id')->references('id')->on('country_states')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
