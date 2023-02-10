<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProgrammes;
use App\Http\Requests\Admin\UpdateProgrammes;
use App\Models\Programmes;
use Illuminate\Http\Request;

class ProgrammesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Programmes::orderBy('created_at', 'DESC')->get();
        return view('admin.programmes.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProgrammes $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProgrammes $request)
    {
        $data = $request->all();
        dd('data');

        if(Programmes::create($data)) {
            return redirect()->route('programmes.index')->with('message', "Programmes created seccessfully!!!");
        }
        return redirect()->route('programmes.index')->with('message', "Unable to created Programmes!!!");
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
        $program = Programmes::find($id);
        return view('admin.programmes.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateProgrammes  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgrammes $request, $id)
    {
        if (!Programmes::find($id)) {
            return redirect()->route('programmes.index')->with('message', "Programmes not fount");
        }

        $program = Programmes::find($id);

        $data = $request->all();

        if ($program->update($data)) {
            return redirect()->route('programmes.index')->with('message', "Programmes changed successfully!!!");
        }
        return redirect()->route('programmes.index')->with('message', "Unable to update Programmes!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Programmes::find($id)) {
            return redirect()->route('programmes.index')->with('message', "Programmes not found");
        }

        $program = Programmes::find($id);

        if ($program->delete()) {
            return redirect()->route('programmes.index')->with('message', "Programmes deleted successfully");
        }
        return redirect()->route('programmes.index')->with('message', "unable to delete Programmes");
    }
}
