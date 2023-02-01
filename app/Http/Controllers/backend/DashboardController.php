<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $first = "Div Academy";
        return view('backend.dashboard',compact('first','second'));
    }
}
