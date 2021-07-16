<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('название вакансии');
            $table->unsignedMediumInteger('salary')->comment('оклад');
            $table->string('experience')->comment('опыт');
            $table->text('offer')->comment('мы предлагаем');
            $table->text('responsibilities')->comment('обязаности');
            $table->text('requirements')->comment('требования');
            $table->text('conditions')->comment('условия');
            $table->boolean('published')->default(true)->comment('опубликован ли');
            $table->string('address')->comment('адрес работы');
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
        Schema::dropIfExists('vacancies');
    }
}
