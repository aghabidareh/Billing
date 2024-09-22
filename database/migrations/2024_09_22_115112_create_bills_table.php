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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parties_type_id')->foreign('parties_id')->references('id')->on('parties_type');
            $table->date('invoice_date')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('item_description')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('cgst_rate')->nullable();
            $table->string('sgst_rate')->nullable();
            $table->string('igst_rate')->nullable();
            $table->string('cgst_amount')->nullable();
            $table->string('sgst_amount')->nullable();
            $table->string('igst_amount')->nullable();
            $table->string('tax_amount')->nullable();
            $table->string('net_amount')->nullable();
            $table->string('declration')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
