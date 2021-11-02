<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class SingleController extends Controller
{
    public function index()
    {

        if (Gate::denies('View_Admin')) {

        abort(403);
    }
        return view('frontend.layouts.single');
    }
}
