<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProgrammesMaster;
use App\Http\Requests\Admin\UpdateProgrammesMaster;
use App\Models\ProgrammesMaster;
use Illuminate\Http\Request;

class ProgrammesMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmasters = ProgrammesMaster::orderBy('created_at', 'DESC')->get();
        return view('admin.programmaster.index', compact('programmasters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programmaster.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProgrammesMaster  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if(ProgrammesMaster::create($data)) {
            return redirect()->route('programmaster.index')->with('message', "Master created seccessfully!!!");
        }
        return redirect()->route('programmaster.index')->with('message', "Unable to created Master!!!");
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
        $programmaster = ProgrammesMaster::find($id);
        return view('admin.programmaster.edit', compact('programmaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateProgrammesMaster  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgrammesMaster $request, $id)
    {
        if (!ProgrammesMaster::find($id)) {
            return redirect()->route('programmaster.index')->with('message', "Master not fount");
        }

        $programmaster = ProgrammesMaster::find($id);

        $data = $request->all();

        if ($programmaster->update($data)) {
            return redirect()->route('programmaster.index')->with('message', "Master changed successfully!!!");
        }
        return redirect()->route('programmaster.index')->with('message', "Unable to update Master!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!ProgrammesMaster::find($id)) {
            return redirect()->route('programmaster.index')->with('message', "Master not found");
        }

        $programmaster = ProgrammesMaster::find($id);

        if ($programmaster->delete()) {
            return redirect()->route('programmaster.index')->with('message', "Master deleted successfully");
        }
        return redirect()->route('programmaster.index')->with('message', "unable to delete Master");
    }
}
