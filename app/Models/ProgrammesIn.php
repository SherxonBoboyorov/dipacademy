<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class ProgrammesIn extends Model
{
    use HasFactory;

    protected $table = 'programmes_ins';

    protected $fillable = [
        'image',
        'title_ru',
        'title_uz',
        'title_en',
        'slug_ru',
        'slug_uz',
        'slug_en',
        'course_type_ru',
        'course_type_uz',
        'course_type_en',
        'delivery_mode_ru',
        'delivery_mode_uz',
        'delivery_mode_en',
        'study_mode_ru',
        'study_mode_uz',
        'study_mode_en',
        'duration_ru',
        'duration_uz',
        'duration_en',
        'start_date_ru',
        'start_date_uz',
        'start_date_en',
        'application_deadline_ru',
        'application_deadline_uz',
        'application_deadline_en',
        'description_ru',
        'description_uz',
        'description_en',
        'content_ru',
        'content_uz',
        'content_en',
        'meta_title_ru',
        'meta_title_uz',
        'meta_title_en',
        'meta_description_ru',
        'meta_description_ru',
        'meta_description_ru'
    ];
}
