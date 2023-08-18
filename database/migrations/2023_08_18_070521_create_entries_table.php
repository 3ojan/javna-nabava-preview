<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->string('external_id')->unique();
            $table->string('oib');
            $table->string('name');
            $table->string('postcode');
            $table->string('city');
            $table->date('date');
            $table->decimal('amount', 10, 2);
            $table->text('description')->nullable();
            $table->json('level_1');
            $table->json('level_2');
            $table->json('level_3');
            $table->json('level_4');
            $table->json('function_level_1');
            $table->json('function_level_2');
            $table->json('function_level_3');
            $table->json('function_level_4');
            $table->text('comment')->nullable();
            $table->timestamp('update_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
