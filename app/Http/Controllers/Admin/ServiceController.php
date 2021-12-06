<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestService;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
         $service =    Service::all();
    return view('admin/service/index' , compact('service'));
    }
    public function create(){
        return view('admin/service/form');
    }
    public function store(RequestService $request){
        $data = request()->except('_token');
        $result = Service::create($data);
        $alert='Đã Tạo Mới Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function edit($id){
        $service = Service::find($id);
        return view('admin/service/form',compact('service'));
    }
    public function update(RequestService $request){
        $result = Service::find($request['id']);
        $data = request()->except('_token','id');

        $result->update($data);
        $alert='Đã Cập Nhật Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function delete(Request $request){
      $service= Service::find($request['id']);
      $service->delete();
        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}