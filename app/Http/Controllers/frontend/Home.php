<?php

namespace App\Http\Controllers\frontend;

use App\Models\Comment;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Controller;
use App\Models\Intention;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\About;
use App\Models\Chart;
use App\Models\Offer;
use App\Models\Team;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;


class Home extends Controller
{
    public function index()
    {
        hascache('settings');

        $categories = Category::where('status', '1')->get();
        $offer = Offer::where('status', '1')->latest()->first();
        $chart = Chart::where('status', '1')->latest()->first();
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $sliders = Slider::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $goals = Intention::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $blogs = Blog::where('status', '1')->orderBy('created_at', 'DESC')->limit(2)->get();
        $teams = Team::where('status', '1')->orderBy('created_at', 'DESC')->limit(3)->get();
        $abouts = About::where('status', '1')->orderBy('created_at', 'DESC')->limit(3)->get();
        $portfolios = Portfolio::with('categoryPortfolio')->where('status', '1')->orderBy('created_at', 'DESC')->get();

        return view('frontend.pages.home.home',
            compact(
                'categories',
                'portfolios',
                'comments',
                'services',
                'sliders',
                'abouts',
                'chart',
                'goals',
                'offer',
                'teams',
                'blogs',
            ));
    }
}
