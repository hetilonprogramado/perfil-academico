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
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->string('rsocial');
            $table->string('nome_fantasia');
            $table->integer('status_id')->unsigned();
            $table->integer('user_deleted_id')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('regime_apuracao')->nullable();
            $table->string('cnpj');
            $table->string('ie')->nullable();
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->string('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->integer('estado_id')->nullable();
            $table->integer('cidade_id')->nullable();
            $table->integer('modulo_id')->unsigned();
            $table->string('telefone1')->nullable();
            $table->string('telefone2')->nullable();
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->binary('logo')->nullable();
            $table->string('token')->nullable();
            $table->date('data_lib')->nullable();
			$table->enum('tipo_pessoa', ['Juridica', 'Fisica'])->nullable();
            $table->timestamps();
            
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
