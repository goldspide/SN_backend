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
        //
        Schema::create('abonne', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->integer('age');
            $table->string('rue',50);
            $table->char('sexe',1)->default('M');
            $table->string('profession',50);
            $table->unsignedInteger('id_motivation');
            $table->foreign('id_motivation')->references('id')->on
            ('motivation')->onDelete('cascade');
            $table->string('code postal',50);
            $table->string('ville',50);
            $table->string('paye',50);
            $table->string('telephone',9)->nullable();
            $table->string('email',50);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('abonne');
    }
};
