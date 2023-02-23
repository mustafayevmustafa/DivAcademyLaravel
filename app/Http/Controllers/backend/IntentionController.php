<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntentionCreateRequest;
use App\Http\Requests\IntentionUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\Intention;

class IntentionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intentions = Intention::orderBy('created_at', 'DESC')->paginate(10);

        return view('backend.pages.intentions.index', compact('intentions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.intentions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntentionCreateRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/intentions'), $imageName);
            $validated['image'] = $imageName;
        }

        Intention::create($validated);
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
        $intention = Intention::find($id);
        return view('backend.pages.intentions.edit', compact('intention'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntentionUpdateRequest $request, $id)
    {
        $intention = Intention::find($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/intentions'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $intention->image;
            if (File::exists(public_path('uploads/intentions/' . $old_img))) {
                File::delete(public_path('uploads/intentions/' . $old_img));
            }
        }

        $intention->update($validated);

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
        $intention = Intention::find($id);
        $old_img = $intention->image;
        $intention->delete();
        if (File::exists(public_path('uploads/intentions/' . $old_img))) {
            File::delete(public_path('uploads/intentions/' . $old_img));
        }

        return redirect()->route('intention.index')->with('success', 'Success');
    }
}
