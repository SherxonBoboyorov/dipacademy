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
        Schema::create('programmes_master_ins', function (Blueprint $table) {
            $table->id();

            $table->string('image');

            $table->string('title_ru');
            $table->string('title_uz');
            $table->string('title_en');

            $table->string('slug_ru');
            $table->string('slug_uz');
            $table->string('slug_en');

            $table->string('course_type_ru');
            $table->string('course_type_uz');
            $table->string('course_type_en');

            $table->string('delivery_mode_ru');
            $table->string('delivery_mode_uz');
            $table->string('delivery_mode_en');

            $table->string('study_mode_ru');
            $table->string('study_mode_uz');
            $table->string('study_mode_en');

            $table->string('duration_ru');
            $table->string('duration_uz');
            $table->string('duration_en');

            $table->string('start_date_ru');
            $table->string('start_date_uz');
            $table->string('start_date_en');

            $table->string('application_deadline_ru');
            $table->string('application_deadline_uz');
            $table->string('application_deadline_en');

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
        Schema::dropIfExists('programmes_master_ins');
    }
};
