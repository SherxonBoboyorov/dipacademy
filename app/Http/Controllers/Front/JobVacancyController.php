<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    public function jobVacancy()
    {
        $vacancies = Vacancy::orderBy('created_at', 'DESC')->get();
        return view('front.vacancies', compact(
            'vacancies'
        ));
    }
}
