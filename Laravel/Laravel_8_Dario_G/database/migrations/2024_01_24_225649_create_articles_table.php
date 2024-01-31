<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('brand');
            $table->text('where');
            $table->float('price', 6, 2);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};