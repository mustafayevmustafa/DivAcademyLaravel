<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function __construct()
    {
        hascache('settings');
    }

    public function index()
    {
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $teams = Team::where('status', '1')->orderBy('created_at', 'DESC')->get();
        return view('frontend.pages.team.team', compact('teams', 'services','comments'));
    }

    public function show($slug)
    {
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        $team = Team::whereslug($slug)->where('status', 1)->first() ?? abort(403, "NOT FOUND");
        return view('frontend.pages.team.team_detail', compact('team','services','comments'));
    }
}
