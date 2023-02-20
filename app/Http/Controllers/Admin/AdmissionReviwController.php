<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionReviw;
use App\Http\Requests\Admin\UpdateAdmissionReviw;
use App\Models\AdmissionReviw;
use App\Models\AdmissionIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdmissionReviwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admission_reviws = AdmissionReviw::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.admissionreviw.index', [
            'admission_reviws' => $admission_reviws
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admissionins = AdmissionIn::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionreviw.create', [
            'admissionins' => $admissionins
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admmin\CreateAdmissionReviw  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionReviw $request)
    {
        $data = $request->all();

        $data['image'] = AdmissionReviw::uploadImage($request);

        if (AdmissionReviw::create($data)) {
            return redirect()->route('admissionreviw.index')->with('message', "Alumni reviews created seccessfully");
        }
        return redirect()->route('admissionreviw.index')->with('message', "unable to create Alumni reviews");
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
    public function edit(AdmissionReviw $admissionreviw)
    {
        $admissionin = AdmissionIn::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionreviw.edit', [
            'admissionin' => $admissionin,
            'admissionreviw' => $admissionreviw
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admmin\UpdateAdmissionReviw  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionReviw $request, $id)
    {
        if (!AdmissionReviw::find($id)) {
            return redirect()->route('admissionreviw.index')->with('message', 'Alumni reviews not found');
        }

        $admissionreviw = AdmissionReviw::find($id);

        $data = $request->all();
        $data['image'] = AdmissionReviw::updateImage($request, $admissionreviw);

        if ($admissionreviw->update($data)) {
            return redirect()->route('admissionreviw.index')->with('message', 'Alumni reviews changed successfully');
        }
        return redirect()->route('admissionreviw.index')->with('message', 'Unable to update Alumni reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionReviw::find($id)) {
            return redirect()->route('admissionreviw.index')->with('message', "Alumni reviews not found");
        }

        $admissionreviw = AdmissionReviw::find($id);

        if (File::exists(public_path() . $admissionreviw->image)) {
            File::delete(public_path() . $admissionreviw->image);
        }

        if ($admissionreviw->delete()) {
            return redirect()->route('admissionreviw.index')->with('message', "Alumni reviews deleted successfully");
        }
        return redirect()->route('admissionreviw.index')->with('message', "unable to delete Alumni reviews");
    }
}
