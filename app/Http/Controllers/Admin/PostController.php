<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $ListPossts = Post::paginate(10);
        return view('admin/posts/index', [
            'data' => $ListPossts,
        ]);
    }
    public function create(){
        return view('adminposts.create');
    }
}
