<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = \App\Category::all();
        return view('frontend.categories.index')->with(compact('categories'));
    }

    public function create() {
        $category = null;
        return view('frontend.categories.form')->with(compact('category'));
    }

    public function store(Request $request) {
        \App\Category::create($request->all());
        return redirect('categories');
    }

    public function edit(Request $request, $id) {
        $category = \App\Category::find($id);
        return view('frontend.categories.form')->with(compact('category'));
    }

    public function update(Request $request, $id) {
        $category = \App\Category::find($id);
        $category->update($request->all());
        return redirect('categories');
    }

    public function destroy(Request $request, $id) {
        \App\Category::find($id)->delete();
        return redirect('categories');
    }
}