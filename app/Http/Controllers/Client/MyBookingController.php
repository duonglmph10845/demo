<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyBookingController extends Controller
{
    public function index()
    {

        $booking_data = Booking::where('user_id', '1')->get();

        return view('frontend/layouts/mybooking', compact('booking_data'));
    }

    public function show($id)
    {
        $show_booking = Booking::find($id);
        if ($show_booking->user_id == Auth::id()) {
            $service_price = 0;
            $discount_rate = null;
            foreach ($show_booking->service as $service) {
                $service_price += $service->price;
            }
            foreach ($show_booking->discount as $discount) {
                $discount_rate = $discount->discount_rate;
            }
            return view('admin/booking/show', compact('show_booking', 'service_price', 'discount_rate'));
        } else {
            abort(403);
        }
    }

}
