<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Chapter;
use App\Models\Status;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();
        $category = Category::all();
        $chapter = Chapter::all();
        $topic = Topic::all();

        return view('topic.index', compact('status', 'category', 'topic', 'chapter'));
    }


    public function getChapters($category_id)
    {
        $category = Category::findOrFail($category_id);
        $chapters = $category->chapters()->pluck('chapter', 'id');

        return response()->json($chapters);
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
            Topic::create([
                'topic' => $request->topic,
                'chapter_id' => $request->chapter_id,
                'category_id' => $request->category_id,
                'status_id' => $request->status_id
            ]);

            return redirect()->route('topic.index')->with('success', 'Topic created successfully');
        } catch (\Exception $exception) {
            return redirect()->route('topic.index')->with('error', 'Error creating topic: ' . $exception->getMessage());
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
    public function edit(string $id)
    {
        $topic = Topic::findOrFail($id);
        $chapter = Chapter::all();
        $category = Category::all();
        $status = Status::all();

        return view('topic.edit', compact('topic', 'chapter', 'category', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $topic = Topic::findOrFail($id);
            $topic->update([
                'topic' => $request->topic,
                'chapter_id' => $request->chapter_id,
                'category_id' => $request->category_id,
                'status_id' => $request->status_id
            ]);

            return redirect()->route('topic.index')->with('success', 'topic updated successfully');
        } catch (\Exception $exception) {
            return redirect()->route('topic.index')->with('error', 'Error updating topic: ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->back()->with('delete', 'topic deleted successfully!');
    }
}
