<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Status;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Exception;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();
        $category = Category::all();

        return view('category.index', compact('status', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Category::create([
                'category' => $request->category,
                'status_id' => $request->status_id
            ]);

            return redirect()->route('category.index')->with('success', 'Category created successfully');
        } catch (\Exception $exception) {
            return redirect()->route('category.index')->with('error', 'Error creating category: ' . $exception->getMessage());
        }
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
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $status = Status::all();

        return view('category.edit', compact('category', 'status'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->update([
                'category' => $request->category,
                'status_id' => $request->status_id
            ]);

            return redirect()->route('category.index')->with('success', 'Category updated successfully');
        } catch (\Exception $exception) {
            return redirect()->route('category.index')->with('error', 'Error updating category: ' . $exception->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('delete', 'Category deleted successfully!');
    }
}
