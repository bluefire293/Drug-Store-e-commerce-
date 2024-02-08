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
        Schema::table('users', function (Blueprint $table) {
            $table->date( column:'date_of_birth')->nullable();
            $table->unsignedSmallInteger( column:'gender')->nullable();
            $table->string( column:'address')->nullable();
            $table->unsignedSmallInteger( column:'city')->nullable();
            $table->string( column:'paypal_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
