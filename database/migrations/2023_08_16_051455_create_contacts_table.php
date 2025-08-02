<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('country_region')->nullable();
            $table->string('state')->nullable();
            $table->string('booking')->nullable();
            $table->string('email')->nullable();
            $table->string('stand')->nullable();
            $table->string('q_about')->nullable();
            $table->string('tagnumber')->nullable();
            $table->string('phone_number')->nullable();
            $table->longText('question')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
