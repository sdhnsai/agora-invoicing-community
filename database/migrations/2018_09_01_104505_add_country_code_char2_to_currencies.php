<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryCodeChar2ToCurrencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->string('country_code_char2', 255)->nullable();
            $table->string('nicename', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currencies', function (Blueprint $table) {
        });
    }
}
