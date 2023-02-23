<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    function __construct()
    {
        hascache('settings');
    }

    public function index(){
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $blogs = Blog::where('status', '1')->orderBy('created_at', 'DESC')->paginate(5);
        return view('frontend.pages.blogs.blogs',compact('blogs', 'services','comments'));
    }

    public function show($slug)
    {
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $blog = Blog::whereslug($slug)->where('status', 1)->first() ?? abort(403, "NOT FOUND");
        return view('frontend.pages.blogs.blog_detail', compact('blog','services','comments'));
    }
}
