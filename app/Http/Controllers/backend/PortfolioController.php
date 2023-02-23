<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioCreateRequest;
use App\Http\Requests\PortfolioUpdateRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\Portfolio;
use App\Models\Category;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $portfolios = DB::table('portfolios')
//            ->leftJoin('categories', 'categories.id', '=', 'portfolios.cat_id')
//            ->select('portfolios.*', 'categories.title as cat_title')
//            ->paginate(10);

        $portfolios = Portfolio::with('categoryPortfolio')->paginate(10);

        return view('backend.pages.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.pages.portfolios.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioCreateRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/portfolios'), $imageName);
            $validated['image'] = $imageName;
        }

        Portfolio::create($validated);
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
        $portfolio = Portfolio::find($id);
        $categories = Category::get();
        return view('backend.pages.portfolios.edit', compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioUpdateRequest $request, $id)
    {
        $portfolio = Portfolio::find($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/portfolios'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $portfolio->image;
            if (File::exists(public_path('uploads/portfolios/' . $old_img))) {
                File::delete(public_path('uploads/portfolios/' . $old_img));
            }
        }

        $portfolio->update($validated);

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
        $portfolio = Portfolio::find($id);
        $old_img = $portfolio->image;
        $portfolio->delete();
        if (File::exists(public_path('uploads/portfolios/' . $old_img))) {
            File::delete(public_path('uploads/portfolios/' . $old_img));
        }

        return redirect()->route('portfolio.index')->with('success', 'Success');
    }
}
