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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
            ->constrained('types')
            ->references('id')
            ->on('types')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')//here goes the problem
            ->constrained('users')
            ->references('id')
            ->on('users')
            ->cascadeOnUpdate()
            ->cascadeOnDelete(); 

            $table->unsignedBigInteger('place_id');            
            $table->foreign('place_id')//here goes the problem
            ->references('id')
            ->on('places')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();


            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')//
            ->constrained('statuses')
            ->cascadeOnUpdate()
            ->references('id')
            ->on('statuses')
            ->cascadeOnDelete(); 

            $table->string('name');
            $table->text('additions')->nullable();
            $table->text('nameOnTheCard')->nullable();
            $table->text('music')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
