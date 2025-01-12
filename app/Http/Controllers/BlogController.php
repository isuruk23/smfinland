<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg,gif,avif',
            'is_active' => 'boolean',
        ]);

       

        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        
        $data = $request->all();
        $data['slug'] = $slug;

         // Handle image upload if provided
         if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images/blogs', 'public');
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
       
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'description' => 'required|string',
            'image' => 'mimes:jpg,png,jpeg,gif,avif',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            // Delete the old image if a new one is uploaded
            if ($blog->image) {
                unlink(storage_path('app/public/' . $blog->image));
            }
            $validated['image'] = $request->file('image')->store('images/blogs', 'public');
        }
        $slugreplace = str_replace(' ', '-', $request->title);
        $slug=Str::lower($slugreplace);
        $validated['slug'] = $slug;

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete the image if it exists
        if ($blog->image) {
            unlink(storage_path('app/public/' . $blog->image));
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
