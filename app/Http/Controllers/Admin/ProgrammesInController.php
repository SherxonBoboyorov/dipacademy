<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProgrammesIn;
use App\Http\Requests\Admin\UpdateProgrammesIn;
use App\Models\ProgrammesIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProgrammesInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes_ins = ProgrammesIn::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.programmesin.index', compact('programmes_ins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programmesin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProgrammesIn $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProgrammesIn $request)
    {
        $data = $request->all();

        $data['image'] = ProgrammesIn::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->titile_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->titile_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->titile_en, '-', 'en');

        if(ProgrammesIn::create($data)) {
            return redirect()->route('programmesin.index')->with('message', "Programmes_In created successfully!!!");
        }
        return redirect()->route('programmesin.index')->with('message', "Programmes_In created successfully!!!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programmesin = ProgrammesIn::find($id);
        return view('admin.programmesin.edit', compact('programmesin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
