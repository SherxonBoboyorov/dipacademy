<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePrograminReviw;
use App\Http\Requests\Admin\UpdatePrograminReviw;
use App\Models\PrograminReviw;
use App\Models\ProgrammesMasterIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrograminReviwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programin_reviws = PrograminReviw::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.programinreviw.index', [
            'programin_reviws' => $programin_reviws
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmes_master_ins = ProgrammesMasterIn::orderBy('created_at', 'DESC')->get();
        return view('admin.programinreviw.create', [
            'programmes_master_ins' => $programmes_master_ins
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePrograminReviw  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePrograminReviw $request)
    {
        $data = $request->all();

        $data['image'] = PrograminReviw::uploadImage($request);

        if (PrograminReviw::create($data)) {
            return redirect()->route('programinreviw.index')->with('message', "Alumni reviews created seccessfully");
        }
        return redirect()->route('programinreviw.index')->with('message', "unable to create Alumni reviews");
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
    public function edit(PrograminReviw $programinreviw)
    {
        $programmesmasterin = ProgrammesMasterIn::orderBy('created_at', 'DESC')->get();
        return view('admin.programinreviw.edit', [
            'programmesmasterin' => $programmesmasterin,
            'programinreviw' => $programinreviw
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePrograminReviw  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrograminReviw $request, $id)
    {
        if (!PrograminReviw::find($id)) {
            return redirect()->route('programinreviw.index')->with('message', 'Alumni reviews not found');
        }

        $programinreviw = PrograminReviw::find($id);

        $data = $request->all();
        $data['image'] = PrograminReviw::updateImage($request, $programinreviw);

        if ($programinreviw->update($data)) {
            return redirect()->route('programinreviw.index')->with('message', 'Alumni reviews changed successfully');
        }
        return redirect()->route('programinreviw.index')->with('message', 'Unable to update Alumni reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!PrograminReviw::find($id)) {
            return redirect()->route('programinreviw.index')->with('message', "Alumni reviews not found");
        }

        $programinreviw = PrograminReviw::find($id);

        if (File::exists(public_path() . $programinreviw->image)) {
            File::delete(public_path() . $programinreviw->image);
        }

        if ($programinreviw->delete()) {
            return redirect()->route('programinreviw.index')->with('message', "Alumni reviews deleted successfully");
        }
        return redirect()->route('programinreviw.index')->with('message', "unable to delete Alumni reviews");
    }
}
