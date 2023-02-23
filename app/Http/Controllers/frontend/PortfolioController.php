<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        hascache('settings');

        $categories = Category::where('status', '1')->get();
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $portfolios = Portfolio::with('categoryPortfolio')->where('status', '1')->orderBy('created_at', 'DESC')->get();

        return view('frontend.pages.portfolio.portfolio', compact('categories', 'portfolios', 'services','comments'));
    }
}
