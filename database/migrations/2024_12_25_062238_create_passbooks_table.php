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
        Schema::create('passbooks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passbooks');
        Schema::create('passbooks', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // 'revenue' or 'expenditure'
            $table->date('date');
            $table->string('description');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }
};
