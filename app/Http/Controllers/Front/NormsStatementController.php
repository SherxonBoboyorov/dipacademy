<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Statement;
use Illuminate\Http\Request;

class NormsStatementController extends Controller
{
    public function NormsStatements()
    {
        $statements = Statement::orderBy('created_at', 'DESC')->get();
        return view('front.normsstatements', compact(
            'statements'
        ));
    }
}
