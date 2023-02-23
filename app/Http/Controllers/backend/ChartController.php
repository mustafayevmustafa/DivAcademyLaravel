<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChartRequest;
use App\Models\Chart;

class ChartController extends Controller
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
        $chart = Chart::count();

        if ($chart > 0) {
            $id = Chart::latest()->first()->id;
            return redirect()->route('chart.edit',$id);
        }

        return view('backend.pages.chart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChartRequest $request)
    {
        $validated = $request->validated();

        $id = Chart::create($validated)->id;
        if ($id>0) {
            return redirect()->route('chart.edit',$id);
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
         $chart = Chart::find($id);
        return view('backend.pages.chart.edit', compact('chart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChartRequest $request, $id)
    {
        $chart = Chart::find($id);
        $validated = $request->validated();
        $chart->update($validated);

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
