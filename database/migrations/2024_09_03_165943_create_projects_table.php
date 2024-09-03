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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('community_id')->constrained()->onDelete('cascade');
            $table->foreignId('developer_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique(); 
            $table->string('image')->nullable();
            $table->text('apartments')->nullable(); 
            $table->text('payment_plan')->nullable(); 
            $table->string('down_payment')->nullable(); 
            $table->string('handover')->nullable(); 
            $table->string('starting_price')->nullable(); 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
