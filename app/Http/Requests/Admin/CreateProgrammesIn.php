<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateProgrammesIn extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,webp',
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'course_type_ru' => 'required|max:255',
            'course_type_uz' => 'required|max:255',
            'course_type_en' => 'required|max:255',
            'delivery_mode_ru' => 'required|max:255',
            'delivery_mode_uz' => 'required|max:255',
            'delivery_mode_en' => 'required|max:255',
            'study_mode_ru' => 'required|max:255',
            'study_mode_uz' => 'required|max:255',
            'study_mode_en' => 'required|max:255',
            'duration_ru' => 'required|max:255',
            'duration_uz' => 'required|max:255',
            'duration_en' => 'required|max:255',
            'start_date_ru' => 'required|max:255',
            'start_date_uz' => 'required|max:255',
            'start_date_en' => 'required|max:255',
            'application_deadline_ru' => 'required|max:255',
            'application_deadline_uz' => 'required|max:255',
            'application_deadline_en' => 'required|max:255',
            'content_ru' => 'required',
            'content_uz' => 'required',
            'content_en' => 'required',
        ];
    }
}
