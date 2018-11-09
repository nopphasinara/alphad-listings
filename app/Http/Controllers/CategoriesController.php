<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::main()->get();
        return view('categories.index', ['categories' => $categories]);
    }

    public function show(Category $category)
    {

        return view('categories.show', ['category' => $category]);
    }

}
