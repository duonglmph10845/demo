<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $Users = null;
        if($request->has('keyword') == true){
            $keyword = $request->get('keyword');
            $Users = User::where('email', 'LIKE', "%$keyword%")->paginate(10);
        } else {
            $Users = User::paginate(10);
        }
        return view('/admin/users/index', [
            'data' => $Users,
        ]);
    }

    public function create(){
        return view('/admin/users/create');
    }
}
