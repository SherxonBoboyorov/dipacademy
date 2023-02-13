<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdmissionMaster;
use App\Http\Requests\Admin\UpdateAdmissionMaster;
use App\Models\AdmissionMaster;
use Illuminate\Http\Request;

class AdmissionMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissionmasters = AdmissionMaster::orderBy('created_at', 'DESC')->get();
        return view('admin.admissionmaster.index', compact('admissionmasters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admissionmaster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdmissionMaster  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdmissionMaster $request)
    {
        $data = $request->all();

        if(AdmissionMaster::create($data)) {
            return redirect()->route('admissionmaster.index')->with('message', "Admissions Master created seccessfully!!!");
        }
        return redirect()->route('admissionmaster.index')->with('message', "Unable to created Admissions Master!!!");
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
        $admissionmaster = AdmissionMaster::find($id);
        return view('admin.admissionmaster.edit', compact('admissionmaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdmissionMaster  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionMaster $request, $id)
    {
        if (!AdmissionMaster::find($id)) {
            return redirect()->route('admissionmaster.index')->with('message', "AdmissionMaster not fount");
        }

        $admissionmaster = AdmissionMaster::find($id);

        $data = $request->all();

        if ($admissionmaster->update($data)) {
            return redirect()->route('admissionmaster.index')->with('message', "AdmissionMaster changed successfully!!!");
        }
        return redirect()->route('admissionmaster.index')->with('message', "Unable to update AdmissionMaster!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!AdmissionMaster::find($id)) {
            return redirect()->route('admissionmaster.index')->with('message', "AdmissionMaster not found");
        }

        $admissionmaster = AdmissionMaster::find($id);

        if ($admissionmaster->delete()) {
            return redirect()->route('admissionmaster.index')->with('message', "AdmissionMaster deleted successfully");
        }
        return redirect()->route('admissionmaster.index')->with('message', "unable to delete AdmissionMaster");
    }
}
