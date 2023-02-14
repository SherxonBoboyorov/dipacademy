<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCategory;
use App\Http\Requests\Admin\UpdateCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCategory  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategory $request)
    {
        $data = $request->all();

        if(Category::create($data)) {
            return redirect()->route('category.index')->with('message', "Category created successfully");
       }
       return redirect()->route('category.index')->with('message', "Unable to create Category");
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
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Request\Admin\UpdateCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory $request, $id)
    {
        if (!Category::find($id)) {
            return redirect()->route('category.index')->with('message', "Category not fount");
        }

        $category = Category::find($id);

        $data = $request->all();

        if ($category->update($data)) {
            return redirect()->route('category.index')->with('message', "Category changed successfully!!!");
        }
        return redirect()->route('category.index')->with('message', "Unable to update Category!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Category::find($id)) {
            return redirect()->route('category.index')->with('message', "Category not found");
        }

        $category = Category::find($id);

        if ($category->delete()) {
            return redirect()->route('category.index')->with('message', "Category deleted successfully");
        }
        return redirect()->route('category.index')->with('message', "unable to delete Category");
    }
}
