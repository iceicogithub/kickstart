<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class NormalController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function registrationPage()
    {
        return view('student.registration');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('q'); // Get the search query from the request

        // Validate the search query (optional)
        $validatedData = $request->validate([
            'q' => 'required|min:3', // Ensure at least 3 characters are entered
        ]);

        // Perform the search using Eloquent or raw SQL (example provided)
        $results = Article::where('title', 'like', "%$searchTerm%")
            ->orWhere('content', 'like', "%$searchTerm%")
            ->limit(5)
            ->get();

        // Return the search results
        return view('includes.admin.header', compact('results'));
    }
}
