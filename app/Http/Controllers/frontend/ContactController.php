<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Service;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        hascache('settings');
        $comments = Comment::orderBy('created_at', 'DESC')->limit(2)->get();
        $services = Service::where('status', '1')->orderBy('created_at', 'DESC')->get();
        return view('frontend.pages.contact.contact', compact('services','comments'));
    }
}
