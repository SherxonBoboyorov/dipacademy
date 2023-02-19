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
        Schema::create('programin_reviws', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('programmesMasterIn_id')->nullable()->unsigned();
            $table->foreign('programmesMasterIn_id')
            ->references('id')
            ->on('programmes_master_ins')
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
        Schema::dropIfExists('programin_reviws');
    }
};
