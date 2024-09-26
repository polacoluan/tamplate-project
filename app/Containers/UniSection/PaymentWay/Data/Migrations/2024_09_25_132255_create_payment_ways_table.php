<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('payment_ways', function (Blueprint $table) {
            $table->id();
            $table->string('way');
            $table->integer('installments');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('payment_ways');
    }
};
