<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('second_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('second_surname')->nullable();
            //Cedula de ciudadanía /Cedula de extranjería / Tarjeta de identidad / Pasaporte
            $table->enum('document_type', ['CC', 'CE', 'TI', 'PASS'])->comment('CC-CEDULA DE CIUDADANIA, CE-CEDULA EXTRANJERIA, TI-TARJETA IDENTIDAD, PASS-PASAPORTE');
            $table->string('document_number');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->timestamps();

            $table->unique(['document_type', 'document_number']);
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}

