<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamCreateRequest;
use App\Http\Requests\TeamUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\Team;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(10);

        return view('backend.pages.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamCreateRequest $request)
    {
        $validated = $request->validated();
        $slug = Str::slug($validated['slug']);
        $has = Team::where('slug', $slug)->count();

        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

         $validated['slug'] = $slug;

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/team/image'), $imageName);
            $validated['image'] = $imageName;
        }

        if ($request->hasFile('pdf_file')) {
            $pdfName = rand(1, 1000) . time() . $request->pdf_file->getClientOriginalName();
            $request->pdf_file->move(public_path('uploads/team/pdf'), $pdfName);
            $validated['pdf_file'] = $pdfName;
        }

        Team::create($validated);
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
        $team = Team::find($id);
        return view('backend.pages.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamUpdateRequest $request, $id)
    {
        $team = Team::find($id);
        $validated = $request->validated();
        $slug = Str::slug($validated['slug']);
        $has = Team::whereNotIn('id',[$id])->where('slug', $slug)->count();

        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/team/image'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $team->image;
            if (File::exists(public_path('uploads/team/image/' . $old_img))) {
                File::delete(public_path('uploads/team/image/' . $old_img));
            }
        }

        if ($request->hasFile('pdf_file')) {
            $pdfName = rand(1, 1000) . time() . $request->pdf_file->getClientOriginalName();
            $request->pdf_file->move(public_path('uploads/team/pdf'), $pdfName);
            $validated['pdf_file'] = $pdfName;

            $old_pdf = $team->pdf;
            if (File::exists(public_path('uploads/team/pdf/' . $old_pdf))) {
                File::delete(public_path('uploads/team/pdf/' . $old_pdf));
            }
        }

        $team->update($validated);

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
        $team = Team::find($id);
        $old_img = $team->image;
        $old_pdf = $team->pdf_file;
        $team->delete();

        if (File::exists(public_path('uploads/team/image/' . $old_img))) {
            File::delete(public_path('uploads/team/image/' . $old_img));
        }

         if (File::exists(public_path('uploads/team/pdf/' . $old_pdf))) {
            File::delete(public_path('uploads/team/pdf/' . $old_pdf));
        }

        return redirect()->route('team.index')->with('success', 'Success');
    }
}
