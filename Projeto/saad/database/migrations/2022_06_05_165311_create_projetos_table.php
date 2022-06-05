<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_projeto', 100);
            $table->string('endereco', 100)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('estado', 50)->nullable();
            $table->string('cidade', 50)->nullable();
            $table->string('cep', 9)->nullable();
            $table->longText('descricao')->nullable();
            $table->binary('photo')->nullable();
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
        Schema::dropIfExists('projetos');
    }
};
