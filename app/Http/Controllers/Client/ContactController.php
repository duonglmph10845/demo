<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.contact');
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $id = auth()->id();
        } else {
            $id = 0;
        }
        $result = Support::create([
            'user_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 0,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()->route('contact')->with('success', 'Cám ơn bạn đã phản hồi!');
    }
}
