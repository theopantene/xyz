<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Track;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        return view('app.categories.index', compact('categories'));
    }

    /**
     * Display the specified category.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\View\View
     */
    public function show(Category $category)
    {
        $tracks = Track::whereCategoryId($category->id)->with('week')->paginate(10);
        return view('app.categories.show', compact('tracks', 'category'));
    }
}
