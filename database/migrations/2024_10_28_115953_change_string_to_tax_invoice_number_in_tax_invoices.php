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
        Schema::table('tax_invoices', function (Blueprint $table) {
            $table->string('tax_invoice_number')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tax_invoices', function (Blueprint $table) {
            $table->integer('tax_invoice_number')->change();
        });
    }
};
