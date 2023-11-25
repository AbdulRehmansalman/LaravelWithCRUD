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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',['m','f','o'])->nullable();
            $table->text('address');
            $table->date('dob')->nullable();
            $table->string('password');
            $table->text('country');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();
            // Php artisan:migrate for Creatre Table
            // php atrisan migrate:rollback // To DFelete the Table
            // php atrisan migrate:refresh // To DFelete and again create the Table
            // To Create New Column: php artisan make:migration add_to_customers_table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
