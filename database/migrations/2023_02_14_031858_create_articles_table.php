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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id')->nullable()->unsigned();
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->string('image');

            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->string('slug_ru');
            $table->string('slug_uz');
            $table->string('slug_en');

            $table->text('content_ru');
            $table->text('content_uz');
            $table->text('content_en');

            $table->text('meta_title_ru')->nullable();
            $table->text('meta_title_uz')->nullable();
            $table->text('meta_title_en')->nullable();

            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_uz')->nullable();
            $table->text('meta_description_en')->nullable();

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
        Schema::dropIfExists('articles');
    }
};