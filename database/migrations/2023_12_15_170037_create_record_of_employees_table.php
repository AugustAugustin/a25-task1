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
        Schema::create('record_of_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->float('hours');
            $table->boolean('paid')->default(false)->comment('Статус: оплачено/не оплачено сотруднику');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_of_employees');
    }
};
