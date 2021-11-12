<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomTyPe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function room_types($id)
    {
        $Romm_types = RoomTyPe::find($id);
        $ListRooms = DB::table('rooms')
        ->select('rooms.id', 'rooms.name', 'rooms.introduce', 'rooms.price', 'rooms.feature_image_path', 'rooms.status', 'room_types.name')
        ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
        ->where('rooms.room_type', $id)
        ->paginate(8);
        return view('frontend/layouts/room_type', compact('ListRooms'));
    }
}
