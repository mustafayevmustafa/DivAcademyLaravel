<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use App\Http\Requests\BlogUpdateRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(10);

        return view('backend.pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCreateRequest $request)
    {
        $validated = $request->validated();

        $slug = Str::slug($validated['slug']);
        $has = Blog::where('slug', $slug)->count();
        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/blogs'), $imageName);
            $validated['image'] = $imageName;
        }

        Blog::create($validated);
        return redirect()->back()->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('backend.pages.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, $id)
    {
        $blog = Blog::find($id);
        $validated = $request->validated();
        $slug = Str::slug($validated['slug']);
        $has = Blog::whereNotIn('id',[$id])->where('slug', $slug)->count();
        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/blogs'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $blog->image;
            if (File::exists(public_path('uploads/blogs/' . $old_img))) {
                File::delete(public_path('uploads/blogs/' . $old_img));
            }
        }

        $blog->update($validated);

        return redirect()->back()->with('success', 'Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $old_img = $blog->image;
        $blog->delete();
        if (File::exists(public_path('uploads/blogs/' . $old_img))) {
            File::delete(public_path('uploads/blogs/' . $old_img));
        }

        return redirect()->route('blog.index')->with('success', 'Success');
    }
}
