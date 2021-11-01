<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageRoom;
use App\Models\Room;
use App\Models\RoomTyPe;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $Rooms = Room::paginate(10);
        return view('/admin/rooms/index', [
            'data' => $Rooms,
        ]);
    }

    public function create()
    {
        $Room_types = RoomTyPe::paginate(10);
        return view('/admin/rooms/create', [
            'data' => $Room_types,
        ]);
    }

    public function store(Request $request)
    {
        dd($request->file('image')->store('profile'));
        $result = Room::create([
            'name'=> $request->name,
            'introduce' => $request->introduce,
            'room_type' => $request->room_type,
            'price' => $request->price,
            'introduce_of_room' => $request->introduce_of_room,
        ]);
        
        if($request->hasFile('image')){
            foreach ($request->file('image') as $item){
                ImageRoom::create([
                    'room_id' => $result->id,
                    'image' => $item,
                ]);
            }
        }
        return redirect()->route('admin.categories.index');
    }
}
