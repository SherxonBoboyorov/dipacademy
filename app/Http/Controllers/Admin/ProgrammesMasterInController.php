<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProgrammesMasterIn;
use App\Http\Requests\Admin\UpdateProgrammesMasterIn;
use App\Models\ProgrammesMasterIn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProgrammesMasterInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programmes_master_ins = ProgrammesMasterIn::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.programmesmasterin.index', compact('programmes_master_ins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programmesmasterin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateProgrammesMasterIn  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['image'] = ProgrammesMasterIn::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->titile_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->titile_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->titile_en, '-', 'en');

        if(ProgrammesMasterIn::create($data)) {
            return redirect()->route('programmesmasterin.index')->with('message', "Programmes_Maser_In created successfully!!!");
        }
        return redirect()->route('programmesmasterin.index')->with('message', "Unable to created Programmes_Maser_In!!!");
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
        $programmesmasterin = ProgrammesMasterIn::find($id);
        return view('admin.programmesmasterin.edit', compact('programmesmasterin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateProgrammesMasterIn  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgrammesMasterIn $request, $id)
    {
        if (!ProgrammesMasterIn::find($id)) {
            return redirect()->route('programmesmasterin.index')->with('message', "Programmes_Maser_In not fount");
        }

        $programmesmasterin = ProgrammesMasterIn::find($id);

        $data = $request->all();
        $data['image'] = ProgrammesMasterIn::updateImage($request, $programmesmasterin);

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($programmesmasterin->update($data)) {
            return redirect()->route('programmesmasterin.index')->with('message', "Programmes_Maser_In changed successfully");
        }
        return redirect()->route('programmesmasterin.index')->with('message', "Unable to update Programmes_Maser_In");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!ProgrammesMasterIn::find($id)) {
            return redirect()->route('programmesmasterin.index')->with('message', "Programmes_Maser_In not found");
        }

        $programmesmasterin = ProgrammesMasterIn::find($id);

        if (File::exists(public_path() . $programmesmasterin->image)) {
            File::delete(public_path() . $programmesmasterin->image);
        }

        if ($programmesmasterin->delete()) {
            return redirect()->route('programmesmasterin.index')->with('message', "Programmes_Maser_In deleted successfully");
        }
        return redirect()->route('programmesmasterin.index')->with('message', "unable to delete Programmes_Maser_In ");
    }
}
