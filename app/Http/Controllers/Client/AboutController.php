<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AboutController extends Controller
{
    public function index()
    {

        return view('frontend.layouts.about');
    }
}
