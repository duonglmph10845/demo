<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\room_types\StoreRequest;
use App\Models\RoomTyPe;
use Illuminate\Http\Request;

class RoomTyPeController extends Controller
{
    public function index(Request $request)
    {
        $Room_types = null;
        if($request->has('keyword') == true){
            $keyword = $request->get('keyword');
            $Room_types = RoomTyPe::where('name', 'LIKE' , "%$keyword%")->paginate(10);
        } else {
            $Room_types = RoomTyPe::paginate(10);
        }
        return view('/admin/categories/index', [
            'data' => $Room_types,
        ]);
    }

    public function create()
    {
        return view('admin/categories/create');
    }
    public function store(StoreRequest $requets)
    {
        $data = request()->except('_token');
        $result = RoomTyPe::create($data);
        return redirect()->route('admin.categories.index');
    }
    public function edit($id)
    {
        $data = RoomTyPe::find($id);
        $htmlOptions = $this->getCate($data->parent_id);
        return view('admin/categories/edit', compact('data', 'htmlOptions'));
    }
    public function update($id)
    {
        $data = request()->except('_token');
        $Room_types = RoomTyPe::find($id);
        $Room_types->update($data);

        return redirect()->route('admin.categories.index');
    }
    public function delete($id)
    {
        $Room_types = RoomTyPe::find($id);
        $Room_types->delete();
        return redirect()->route('admin.categories.index');
    }
}
