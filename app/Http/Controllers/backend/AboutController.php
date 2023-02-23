<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutCreateRequest;
use App\Http\Requests\AboutUpdateRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::orderBy('created_at', 'DESC')->paginate(10);

        return view('backend.pages.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutCreateRequest $request)
    {
        $validated = $request->validated();

        $slug = Str::slug($validated['slug']);
        $has = About::where('slug', $slug)->count();

        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

         $validated['slug'] = $slug;

        if ($request->hasFile('icon')) {
            $iconName = rand(1, 1000) . time() . $request->icon->getClientOriginalName();
            $request->icon->move(public_path('uploads/about'), $iconName);
            $validated['icon'] = $iconName;
        }

        $id = About::create($validated)->id;
        if ($id>0) {
            return redirect()->back()->with('success', 'Created successfully..');
        } else {
            return redirect()->back()->with('error', 'Failed operation.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $about = About::find($id);
        return view('backend.pages.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUpdateRequest $request, $id)
    {

        $about = About::find($id);
        $validated = $request->validated();
        $slug = Str::slug($validated['slug']);
        $has = About::whereNotIn('id',[$id])->where('slug', $slug)->count();

        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('icon')) {
            $iconName = rand(1, 1000) . time() . $request->icon->getClientOriginalName();
            $request->icon->move(public_path('uploads/about'), $iconName);
            $validated['icon'] = $iconName;

            $old_img = $about->icon;
            if (File::exists(public_path('uploads/about/' . $old_img))) {
                File::delete(public_path('uploads/about/' . $old_img));
            }
        }

        $about->update($validated);

        return redirect()->back()->with('success', 'Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        $old_icon = $about->icon;
        $about->delete();
        if (File::exists(public_path('uploads/about/' . $old_icon))) {
            File::delete(public_path('uploads/about/' . $old_icon));
        }

        return redirect()->route('about.index')->with('success', 'Success');
    }
}
