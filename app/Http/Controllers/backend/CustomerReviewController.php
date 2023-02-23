<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewCreateRequest;
use App\Http\Requests\ReviewUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\CustomerReview;

class CustomerReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = CustomerReview::orderBy('created_at', 'DESC')->paginate(10);

        return view('backend.pages.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewCreateRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/reviews'), $imageName);
            $validated['image'] = $imageName;
        }

        CustomerReview::create($validated);
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
        $review = CustomerReview::find($id);
        return view('backend.pages.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReviewUpdateRequest $request, $id)
    {
        $review = CustomerReview::find($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/reviews'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $review->image;
            if (File::exists(public_path('uploads/reviews/' . $old_img))) {
                File::delete(public_path('uploads/reviews/' . $old_img));
            }
        }

        $review->update($validated);

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
        $review = CustomerReview::find($id);
        $old_img = $review->image;
        $review->delete();
        if (File::exists(public_path('uploads/reviews/' . $old_img))) {
            File::delete(public_path('uploads/reviews/' . $old_img));
        }

        return redirect()->route('review.index')->with('success', 'Success');
    }
}
