<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\room_types\StoreRequest;
use App\Models\RoomTyPe;
use Illuminate\Http\Request;

class RoomTyPeController extends Controller
{
    public function index()
    {
        $Room_types = RoomTyPe::paginate(10);
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
        $user = RoomTyPe::find($id);
        $user->update($data);

        return redirect()->route('admin.categories.index');
    }
    public function delete($id)
    {
        $user = RoomTyPe::find($id);
        $user->delete();
        return redirect()->route('admin.categories.index');
    }
}
