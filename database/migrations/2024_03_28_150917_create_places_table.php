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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('location');
            $table->integer('phone');
            /*$table->foreign('category_id')
            ->constrained('category_places')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            $table->foreign('time_availability')
            ->constrained('availabilities')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
           */$table->timestamps();           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
