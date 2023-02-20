<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionMasterReviw;
use App\Http\Requests\Admin\UpdateAdmissionMasterReviw;
use App\Models\AdmissionMasterReviw;
use App\Models\AdmissionMasterIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdmissionMasterReviwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admission_master_reviws = AdmissionMasterReviw::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.admissionmasterreviw.index', [
            'admission_master_reviws' => $admission_master_reviws
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admissionmasterins = AdmissionMasterIn::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionmasterreviw.create', [
            'admissionmasterins' => $admissionmasterins
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionMasterReviw  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionMasterReviw $request)
    {
        $data = $request->all();

        $data['image'] = AdmissionMasterReviw::uploadImage($request);

        if (AdmissionMasterReviw::create($data)) {
            return redirect()->route('admissionmasterreviw.index')->with('message', "Alumni reviews created seccessfully");
        }
        return redirect()->route('admissionmasterreviw.index')->with('message', "unable to create Alumni reviews");
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
    public function edit(AdmissionMasterReviw $admissionmasterreviw)
    {
        $admissionmasterin = AdmissionMasterIn::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionmasterreviw.edit', [
            'admissionmasterin' => $admissionmasterin,
            'admissionmasterreviw' => $admissionmasterreviw
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionMasterReviw  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionMasterReviw $request, $id)
    {
        if (!AdmissionMasterReviw::find($id)) {
            return redirect()->route('admissionmasterreviw.index')->with('message', 'Alumni reviews not found');
        }

        $admissionmasterreviw = AdmissionMasterReviw::find($id);

        $data = $request->all();
        $data['image'] = AdmissionMasterReviw::updateImage($request, $admissionmasterreviw);

        if ($admissionmasterreviw->update($data)) {
            return redirect()->route('admissionmasterreviw.index')->with('message', 'Alumni reviews changed successfully');
        }
        return redirect()->route('admissionmasterreviw.index')->with('message', 'Unable to update Alumni reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionMasterReviw::find($id)) {
            return redirect()->route('admissionmasterreviw.index')->with('message', "Alumni reviews not found");
        }

        $admissionmasterreviw = AdmissionMasterReviw::find($id);

        if (File::exists(public_path() . $admissionmasterreviw->image)) {
            File::delete(public_path() . $admissionmasterreviw->image);
        }

        if ($admissionmasterreviw->delete()) {
            return redirect()->route('admissionmasterreviw.index')->with('message', "Alumni reviews deleted successfully");
        }
        return redirect()->route('admissionmasterreviw.index')->with('message', "unable to delete Alumni reviews");
    }
}
