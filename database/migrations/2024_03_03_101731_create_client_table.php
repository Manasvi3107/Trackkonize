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
        Schema::create('client', function (Blueprint $table) {
            $table->id('clientId');
            $table->string('company_name', 255);
            $table->string('company_contact', 255);
            $table->string('company_email', 255);
            $table->string('contact_person_name', 255);
            $table->string('contact_person_contact', 255);
            $table->string('contact_person_email', 255);
            $table->enum('client_status', ["active","inactive"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
