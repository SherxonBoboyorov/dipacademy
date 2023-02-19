<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProgramReviw;
use App\Http\Requests\Admin\UpdateProgramReviw;
use App\Models\ProgramReviw;
use App\Models\ProgrammesIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProgramReviwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program_reviws = ProgramReviw::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.programreviw.index', [
            'program_reviws' => $program_reviws
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programmes_ins = ProgrammesIn::orderBy('created_at', 'DESC')->get();
        return view('admin.programreviw.create', [
            'programmes_ins' => $programmes_ins
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProgramReviw  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProgramReviw $request)
    {
        $data = $request->all();

        $data['image'] = ProgramReviw::uploadImage($request);

        if (ProgramReviw::create($data)) {
            return redirect()->route('programreviw.index')->with('message', "Alumni reviews created seccessfully");
        }
        return redirect()->route('programreviw.index')->with('message', "unable to create Alumni reviews");
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
    public function edit(ProgramReviw $programreviw)
    {
        $programmesin = ProgrammesIn::orderBy('created_at', 'DESC')->get();
        return view('admin.programreviw.edit', [
            'programmesin' => $programmesin,
            'programreviw' => $programreviw
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateProgramReviw;  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramReviw $request, $id)
    {
        if (!ProgramReviw::find($id)) {
            return redirect()->route('programreviw.index')->with('message', 'Alumni reviews not found');
        }

        $programreviw = ProgramReviw::find($id);

        $data = $request->all();
        $data['image'] = ProgramReviw::updateImage($request, $programreviw);

        if ($programreviw->update($data)) {
            return redirect()->route('programreviw.index')->with('message', 'Alumni reviews changed successfully');
        }
        return redirect()->route('programreviw.index')->with('message', 'Unable to update Alumni reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!ProgramReviw::find($id)) {
            return redirect()->route('programreviw.index')->with('message', "Alumni reviews not found");
        }

        $programreviw = ProgramReviw::find($id);

        if (File::exists(public_path() . $programreviw->image)) {
            File::delete(public_path() . $programreviw->image);
        }

        if ($programreviw->delete()) {
            return redirect()->route('programreviw.index')->with('message', "Alumni reviews deleted successfully");
        }
        return redirect()->route('programreviw.index')->with('message', "unable to delete Alumni reviews");
    }
}
