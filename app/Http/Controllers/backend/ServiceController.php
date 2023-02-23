<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Models\Service;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'DESC')->paginate(10);

        return view('backend.pages.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCreateRequest $request)
    {
        $validated = $request->validated();
        $slug = Str::slug($validated['slug']);
        $has = Service::where('slug', $slug)->count();

        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

         $validated['slug'] = $slug;

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/services/image'), $imageName);
            $validated['image'] = $imageName;
        }

        if ($request->hasFile('logo')) {
            $logoName = rand(1, 1000) . time() . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('uploads/services/logo'), $logoName);
            $validated['logo'] = $logoName;
        }

        if ($request->hasFile('pdf_file')) {
            $pdfName = rand(1, 1000) . time() . $request->pdf_file->getClientOriginalName();
            $request->pdf_file->move(public_path('uploads/services/pdf'), $pdfName);
            $validated['pdf_file'] = $pdfName;
        }

        Service::create($validated);
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
        $service = Service::find($id);
        return view('backend.pages.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, $id)
    {
        $service = Service::find($id);
        $validated = $request->validated();
        $slug = Str::slug($validated['slug']);
        $has = Service::whereNotIn('id',[$id])->where('slug', $slug)->count();

        if ($has!=0) {
            return redirect()->back()->with('error', "slug is available");
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/services/image'), $imageName);
            $validated['image'] = $imageName;

            $old_img = $service->image;
            if (File::exists(public_path('uploads/services/image' . $old_img))) {
                File::delete(public_path('uploads/services/image' . $old_img));
            }
        }

        if ($request->hasFile('logo')) {
            $logoName = rand(1, 1000) . time() . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('uploads/services/logo'), $logoName);
            $validated['logo'] = $logoName;

            $old_logo = $service->logo;
            if (File::exists(public_path('uploads/services/logo' . $old_logo))) {
                File::delete(public_path('uploads/services/logo' . $old_logo));
            }
        }

        if ($request->hasFile('pdf_file')) {
            $pdfName = rand(1, 1000) . time() . $request->pdf_file->getClientOriginalName();
            $request->pdf_file->move(public_path('uploads/services/pdf'), $pdfName);
            $validated['pdf_file'] = $pdfName;

            $old_pdf = $service->pdf;
            if (File::exists(public_path('uploads/services/pdf' . $old_pdf))) {
                File::delete(public_path('uploads/services/pdf' . $old_pdf));
            }
        }

        $service->update($validated);

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
        $service = Service::find($id);
        $old_img = $service->image;
        $old_logo = $service->logo;
        $old_pdf = $service->pdf_file;
        $service->delete();

        if (File::exists(public_path('uploads/services/image/' . $old_img))) {
            File::delete(public_path('uploads/services/image/' . $old_img));
        }

        if (File::exists(public_path('uploads/services/logo/' . $old_logo))) {
            File::delete(public_path('uploads/services/logo/' . $old_logo));
        }

        if (File::exists(public_path('uploads/services/pdf/' . $old_pdf))) {
            File::delete(public_path('uploads/services/pdf/' . $old_pdf));
        }

        return redirect()->route('service.index')->with('success', 'Success');
    }
}
