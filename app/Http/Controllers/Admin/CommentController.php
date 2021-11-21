<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function index()
    {
        $listComments = DB::table('comments')
        ->select('comments.id', 'comments.content', 'comments.room_id', 'comments.created_at', 'rooms.feature_image_path')
        ->join('rooms', 'comments.room_id', '=', 'rooms.id')
        ->paginate(10);
        return view('admin/comments/index', [
            'data' => $listComments,
        ]);
    }

    public function getComment($id)
    {
        $listComments = DB::table('comments')
        ->select('comments.id', 'comments.content', 'comments.room_id', 'comments.created_at', 'products.feature_image_path')
        ->join('rooms', 'comments.room_id', '=', 'rooms.id')->where('product_id', $id)
        ->paginate(10);
        return view('admin/comments/detail', [
            'data' => $listComments,
        ]);
    }
}
