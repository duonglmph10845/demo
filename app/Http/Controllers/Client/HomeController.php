<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ImageRoom;
use App\Models\Room;
use App\Models\RoomTyPe;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function room_types($id)
    {
        $Romm_types = RoomTyPe::find($id);
        $ListRooms = DB::table('rooms')
        ->select('rooms.id', 'rooms.name as name_room', 'rooms.introduce', 'rooms.price', 'rooms.feature_image_path', 'rooms.status', 'room_types.name')
        ->join('room_types', 'rooms.room_type', '=', 'room_types.id')
        ->where('rooms.room_type', $id)
        ->paginate(8);
        return view('frontend/layouts/room_type', compact('ListRooms', 'Romm_types'));
    }
    public function room_detail($id){
        $Room_detail = Room::find($id);
        $Image_room = ImageRoom::where('room_id', $id)->get();
        $service = Service::all();
        return view('frontend/layouts/room_detail', compact('Room_detail', 'Image_room',  'service'));
    }
    public function comment($id, Request $request){
        if (Auth::check()) {
            $data = Comment::create([
                'content' => $request->content,
                'product_id' => $id,
                'user_id' => auth()->id(),
            ]);
            return redirect()->back();
        } else {
            abort(404);
        }
    }
}
