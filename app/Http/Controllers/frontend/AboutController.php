<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Service;
use App\Models\About;

use App\Models\Team;

class AboutController extends Controller
{
    function __construct()
    {
        hascache('settings');
    }

    public function index()
    {


        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $abouts = About::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $teams = Team::where('status', '1')->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('frontend.pages.about.about', compact('abouts', 'teams', 'services','comments'));
    }

    public function show($slug)
    {
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $about = About::whereslug($slug)->where('status', 1)->first() ?? abort(403, "NOT FOUND");
        return view('frontend.pages.about.about_detail', compact('about', 'services','comments'));
    }
}
