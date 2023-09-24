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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('cat_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('lang_id')->nullable();
            $table->string('lang')->nullable();
            $table->timestamp('updated_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
