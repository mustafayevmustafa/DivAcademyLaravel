<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfferCreateRequest;
use App\Http\Requests\OfferUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offer = Offer::count();

        if ($offer > 0) {
            $id = Offer::latest()->first()->id;
            return redirect()->route('offer.edit',$id);
        }

        return view('backend.pages.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferCreateRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/offer/image'), $imageName);
            $validated['image'] = $imageName;
        }

        if ($request->hasFile('video')) {
            $videoName = rand(1, 1000) . time() . $request->video->getClientOriginalName();
            $request->video->move(public_path('uploads/offer/video'), $videoName);
            $validated['video'] = $videoName;
        }

        $id = Offer::create($validated)->id;
        if ($id>0) {
            return redirect()->route('offer.edit',$id);
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
         $offer = Offer::find($id);
        return view('backend.pages.offer.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfferUpdateRequest $request, $id)
    {
        $offer = Offer::find($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/offer/image'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $offer->image;
            if (File::exists(public_path('uploads/offer/image/' . $old_img))) {
                File::delete(public_path('uploads/offer/image/' . $old_img));
            }
        }

        if ($request->hasFile('video')) {
            $videoName = rand(1, 1000) . time() . $request->video->getClientOriginalName();
            $request->video->move(public_path('uploads/offer/video'), $videoName);
            $validated['video'] = $videoName;

            $old_img = $offer->video;
            if (File::exists(public_path('uploads/offer/video/' . $old_img))) {
                File::delete(public_path('uploads/blogs/video/' . $old_img));
            }
        }
        $offer->update($validated);

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
        //
    }
}
