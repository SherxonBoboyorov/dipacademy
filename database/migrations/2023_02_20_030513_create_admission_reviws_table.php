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
        Schema::create('admission_reviws', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('admissionIn_id')->nullable()->unsigned();
            $table->foreign('admissionIn_id')
            ->references('id')
            ->on('admission_ins')
            ->onDelete('cascade');

            $table->string('image');

            $table->string('name_ru');
            $table->string('name_uz');
            $table->string('name_en');

            $table->string('graduate_ru');
            $table->string('graduate_uz');
            $table->string('graduate_en');

            $table->text('content_ru');
            $table->text('content_uz');
            $table->text('content_en');

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
        Schema::dropIfExists('admission_reviws');
    }
};
