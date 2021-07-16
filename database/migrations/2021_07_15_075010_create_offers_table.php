<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('имя кандидата')->nullable();
            $table->string('email')->comment('email кандидата')->nullable();
            $table->string('phone')->comment('телефон кандидата')->nullable();
            $table->string('vacancy')->comment('претендует на должность')->nullable();
            $table->string('file')->comment('резюме кандидата')->nullable();
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
        Schema::dropIfExists('offers');
    }
}
