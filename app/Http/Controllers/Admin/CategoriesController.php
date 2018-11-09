<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('admin');
    }

    public function index()
    {
        $categories = Category::main()->get();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create(Request $request)
    {
        $parent = $request->parent??0;
        return view('admin.categories.create', ['parent' => $parent]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:50',
            'slug' => 'required|min:3|max:50|unique:categories,slug',
            'description' => 'min:10|max:150',
            'parent_id' => 'sometimes|required|exists:categories,id'
        ]);

        $category = Category::create($request->only(['name', 'slug', 'description', 'parent_id']));

        return redirect()->route('admin.categories.show', ['category' => $category]);
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', ['category' => $category]);
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        Validator::make($request->all(), [
            'name' => 'required|min:3|max:50',
            'slug' => ['required','min:3','max:50', Rule::unique('categories')->ignore($category->id)],
            'description' => 'min:2|max:50',
        ]);

        $category->fill($request->only(['name', 'slug', 'description']));
        $category->save();

        return redirect()->route('admin.categories.show', ['category' => $category]);
    }

    public function destroy(Category $category)
    {
        //
    }

}
