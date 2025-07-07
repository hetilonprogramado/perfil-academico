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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name')->nullable();            
            $table->string('email');
            $table->string('password')->nullable();
            $table->integer('status_id')->unsigned()->default(1);
            $table->integer('grupos_user_id')->unsigned();
            $table->integer('funcionario_id')->unsigned();
            $table->integer('user_deleted_id')->unsigned()->nullable();
			$table->integer('empresa_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
			$table->softDeletes();
			
			$table->primary(['id']);
			
			$table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
