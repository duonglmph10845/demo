<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $ListSlider = Slider::paginate(10);
        return view('frontend.layouts.about', [
            'data' => $ListSlider,
        ]);
    }
}
