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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->integer('qty')->nullable();     
            $table->integer('payment_total')->nullable();
            $table->enum('status', ['Unpaid','Paid','Failed'])->nullable();
            $table->string('snap_token', 50)->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
