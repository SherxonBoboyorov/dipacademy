<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionMasterIn;
use App\Http\Requests\Admin\UpdateAdmissionMasterIn;
use App\Models\AdmissionMasterIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdmissionMasterInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissionmasterins = AdmissionMasterIn::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.admissionmasterin.index', compact('admissionmasterins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admissionmasterin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionMasterIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionMasterIn $request)
    {
        $data = $request->all();

        $data['image'] = AdmissionMasterIn::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->titile_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->titile_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->titile_en, '-', 'en');

        if(AdmissionMasterIn::create($data)) {
            return redirect()->route('admissionmasterin.index')->with('message', "AdmissionMasterIn created successfully!!!");
        }
        return redirect()->route('admissionmasterin.index')->with('message', "Unable to created AdmissionMasterIn!!!");
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
        $admissionmasterin = AdmissionMasterIn::find($id);
        return view('admin.admissionmasterin.edit', compact('admissionmasterin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionMasterIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionMasterIn $request, $id)
    {
        if (!AdmissionMasterIn::find($id)) {
            return redirect()->route('admissionmasterin.index')->with('message', "AdmissionMasterIn not fount");
        }

        $admissionmasterin = AdmissionMasterIn::find($id);

        $data = $request->all();
        $data['image'] = AdmissionMasterIn::updateImage($request, $admissionmasterin);

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($admissionmasterin->update($data)) {
            return redirect()->route('admissionmasterin.index')->with('message', "AdmissionMasterIn changed successfully");
        }
        return redirect()->route('admissionmasterin.index')->with('message', "Unable to update AdmissionMasterIn");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionMasterIn::find($id)) {
            return redirect()->route('admissionmasterin.index')->with('message', "AdmissionMasterIn not found");
        }

        $admissionmasterin = AdmissionMasterIn::find($id);

        if (File::exists(public_path() . $admissionmasterin->image)) {
            File::delete(public_path() . $admissionmasterin->image);
        }

        if ($admissionmasterin->delete()) {
            return redirect()->route('admissionmasterin.index')->with('message', "AdmissionMasterIn deleted successfully");
        }
        return redirect()->route('admissionmasterin.index')->with('message', "unable to delete AdmissionMasterIn");
    }
}
