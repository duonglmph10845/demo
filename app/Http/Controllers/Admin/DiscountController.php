<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestDiscount;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index(){
        $discount =    Discount::all();
        return view('admin/discount/index' , compact('discount'));
    }
    public function create(){
        return view('admin/discount/form');
    }
    public function store(RequestDiscount $request){
        $data = request()->except('_token');
        $result = Discount::create($data);
        $alert='Đã Tạo Mới Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function edit($id){
        $discount = Discount::find($id);
        return view('admin/discount/form',compact('discount'));
    }
    public function update(RequestDiscount $request){
        $result = Discount::find($request['id']);
        $data = request()->except('_token','id');

        $result->update($data);
        $alert='Đã Cập Nhật Thanh Công!';
        return redirect()->back()->with('alert',$alert);
    }
    public function delete(Request $request){
        $discount= Discount::find($request['id']);
        $discount->delete();
        return response()->json([
            'status' => '100',
            'message' => 'Xóa thành công',
        ]);
    }
}
