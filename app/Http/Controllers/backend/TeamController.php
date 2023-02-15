<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamCreateRequest;
use App\Http\Requests\TeamUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::paginate(10);

        return view('backend.pages.team.index', compact('team'));
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

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/team'), $imageName);
            $validated['image'] = $imageName;
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

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/team'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $team->image;
            if (File::exists(public_path('uploads/team/' . $old_img))) {
                File::delete(public_path('uploads/team/' . $old_img));
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
        $team->delete();
        if (File::exists(public_path('uploads/team/' . $old_img))) {
            File::delete(public_path('uploads/team/' . $old_img));
        }

        return redirect()->route('team.index')->with('success', 'Success');
    }
}
