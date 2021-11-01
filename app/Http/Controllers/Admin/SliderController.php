<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $ListSlider = Slider::paginate(10);
        return view('/admin/sliders/index', [
            'data' => $ListSlider,
        ]);
    }
    public function create()
    {
        return view('/admin/sliders/create');
    }
    public function store(Request $request)
    {
        $data = request()->except('_token');
        $result = Slider::create($data);
        return redirect()->route('admin.sliders.index');
    }
    public function edit($id)
    {
        $data = Slider::find($id);
        return view('admin/sliders/edit', compact('data'));
    }
    public function update($id)
    {
        $data = request()->except('_token');
        $user = Slider::find($id);
        $user->update($data);

        return redirect()->route('admin.sliders.index');
    }
    public function delete($id)
    {
        $user = Slider::find($id);
        $user->delete();
        return redirect()->route('admin.sliders.index');
    }
}
