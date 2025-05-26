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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('promotion_id')->nullable()->constrained('promotions')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('code', 30)->unique();
            $table->integer('usage_limit')->unsigned()->nullable();
            $table->integer('current_uses')->unsigned()->default(0);
            $table->tinyInteger('registered_users_only')->unsigned()->default(1);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->tinyInteger('active')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
