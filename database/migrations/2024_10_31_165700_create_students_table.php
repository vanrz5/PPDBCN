<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nisn')->unique();
        $table->string('nama');
        $table->date('birth');
        $table->enum('gender', ['Laki-Laki', 'Perempuan']);
        $table->string('ayah');
        $table->string('ibu');
        $table->enum('jurusan', ['TJKT', 'MPLB', 'PPLG', 'DKV', 'PM']);
        $table->string('email')->unique();
        $table->string('phone');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
