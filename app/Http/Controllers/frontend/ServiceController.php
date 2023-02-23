<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CustomerReview;
use App\Models\Faq;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function __construct()
    {
        hascache('settings');
    }

    public function index()
    {

        $faqs = Faq::where('status', '1')->get();
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $reviews = CustomerReview::where('status', '1')->orderBy('created_at', 'DESC')->get();
        return view('frontend.pages.service.service', compact('faqs', 'reviews', 'services','comments'));
    }

    public function show($slug)
    {
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $service = Service::whereslug($slug)->where('status', 1)->first() ?? abort(403, "NOT FOUND");
        return view('frontend.pages.service.service_detail', compact('service', 'services','comments'));
    }
}
