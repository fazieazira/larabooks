<?php

namespace App\Http\Controllers;
use App\Models\BookCategory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = BookCategory::all();
        return view('bookcategories.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        BookCategory::create($request->only('name'));
        return redirect()->route('bookcategories.index')->with('success', 'Category created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('bookcategories.edit', compact('bookcategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $bookcategory->update($request->only('name'));
        return redirect()->route('bookcategories.index')->with('success', 'Category updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bookcategory->delete();
        return redirect()->route('bookcategories.index')->with('success', 'Category deleted!');

    }
}
