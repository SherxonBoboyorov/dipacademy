<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionIn;
use App\Http\Requests\Admin\UpdateAdmissionIn;
use App\Models\AdmissionIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdmissionInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissionins = AdmissionIn::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.admissionin.index', compact('admissionins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admissionin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionIn $request)
    {
        $data = $request->all();

        $data['image'] = AdmissionIn::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->titile_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->titile_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->titile_en, '-', 'en');

        if(AdmissionIn::create($data)) {
            return redirect()->route('admissionin.index')->with('message', "AdmissionIn created successfully!!!");
        }
        return redirect()->route('admissionin.index')->with('message', "Unable to created AdmissionIn!!!");
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
        $admissionin = AdmissionIn::find($id);
        return view('admin.admissionin.edit', compact('admissionin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionIn $request, $id)
    {
        if (!AdmissionIn::find($id)) {
            return redirect()->route('admissionin.index')->with('message', "AdmissionIn not fount");
        }

        $admissionin = AdmissionIn::find($id);

        $data = $request->all();
        $data['image'] = AdmissionIn::updateImage($request, $admissionin);

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($admissionin->update($data)) {
            return redirect()->route('admissionin.index')->with('message', "AdmissionIn changed successfully");
        }
        return redirect()->route('admissionin.index')->with('message', "Unable to update AdmissionIn");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionIn::find($id)) {
            return redirect()->route('admissionin.index')->with('message', "AdmissionIn not found");
        }

        $admissionin = AdmissionIn::find($id);

        if (File::exists(public_path() . $admissionin->image)) {
            File::delete(public_path() . $admissionin->image);
        }

        if ($admissionin->delete()) {
            return redirect()->route('admissionin.index')->with('message', "AdmissionIn deleted successfully");
        }
        return redirect()->route('admissionin.index')->with('message', "unable to delete AdmissionIn ");
    }
}
