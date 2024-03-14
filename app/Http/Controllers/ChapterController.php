<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chapter;
use App\Models\Status;
use App\Models\Topic;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();
        $category = Category::all();
        $chapter = Chapter::all();

        return view('chapter.index', compact('status', 'category', 'chapter'));
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
            Chapter::create([
                'chapter' => $request->chapter,
                'category_id' => $request->category_id,
                'status_id' => $request->status_id
            ]);

            return redirect()->route('chapter.index')->with('success', 'Chapter created successfully');
        } catch (\Exception $exception) {
            return redirect()->route('chapter.index')->with('error', 'Error creating chapter: ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Assuming you want to pass the chapter ID to the view
        $chapter = Chapter::findOrFail($id);
        $status = Status::all();
        $category = Category::where('status_id', 1)->get();

        // You might fetch topics related to this chapter and pass them to the view
        $topics = $chapter->topics()->where('status_id', 1)->paginate(10); // Example pagination, adjust as needed

        return view('chapter.show', compact('chapter', 'topics', 'status', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chapter = Chapter::findOrFail($id);
        $category = Category::all();
        $status = Status::all();

        return view('chapter.edit', compact('chapter', 'category', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $chapter = Chapter::findOrFail($id);
            $chapter->update([
                'chapter' => $request->chapter,
                'category_id' => $request->category_id,
                'status_id' => $request->status_id
            ]);

            return redirect()->route('chapter.index')->with('success', 'Chapter updated successfully');
        } catch (\Exception $exception) {
            return redirect()->route('chapter.index')->with('error', 'Error updating chapter: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
        return redirect()->back()->with('delete', 'Chapter deleted successfully!');
    }
}
