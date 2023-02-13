<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateWhyDipAcademy;
use App\Http\Requests\Admin\UpdateWhyDipAcademy;
use App\Models\WhyDipAcademy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WhyDipAcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whydipacademies = WhyDipAcademy::orderBy('created_at', 'DESC')->get();
        return view('admin.whydipacademy.index', compact('whydipacademies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.whydipacademy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateWhyDipAcademy $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateWhyDipAcademy $request)
    {
        $data = $request->all();

        $data['image'] = WhyDipAcademy::uploadImage($request);

        if (WhyDipAcademy::create($data)) {
            return redirect()->route('whydipacademy.index')->with('message', "Why_Dip_Academy created seccessfully");
        }
        return redirect()->route('whydipacademy.index')->with('message', "unable to create Why_Dip_Academy");
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
        $whydipacademy = WhyDipAcademy::find($id);
        return view('admin.whydipacademy.edit', compact('whydipacademy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateWhyDipAcademy  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWhyDipAcademy $request, $id)
    {
        if (!WhyDipAcademy::find($id)) {
            return redirect()->route('whydipacademy.index')->with('message', 'Why_Dip_Academy not found');
        }

        $whydipacademy = WhyDipAcademy::find($id);

        $data = $request->all();
        $data['image'] = WhyDipAcademy::updateImage($request, $whydipacademy);

        if ($whydipacademy->update($data)) {
            return redirect()->route('whydipacademy.index')->with('message', 'Why_Dip_Academy changed successfully');
        }
        return redirect()->route('whydipacademy.index')->with('message', 'Unable to update Why_Dip_Academy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!WhyDipAcademy::find($id)) {
            return redirect()->route('whydipacademy.index')->with('message', "Why_Dip_Academy not found");
        }

        $whydipacademy = WhyDipAcademy::find($id);

        if (File::exists(public_path() . $whydipacademy->image)) {
            File::delete(public_path() . $whydipacademy->image);
        }

        if ($whydipacademy->delete()) {
            return redirect()->route('whydipacademy.index')->with('message', "Why_Dip_Academy deleted successfully");
        }
        return redirect()->route('whydipacademy.index')->with('message', "unable to delete Why_Dip_Academy");
    }
}
