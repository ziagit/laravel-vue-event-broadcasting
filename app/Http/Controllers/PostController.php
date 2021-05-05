<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(Request $request){
        $keyword = $request->keyword;
        $result = Post::where('title', 'like', '%'.$keyword.'%')
        ->paginate(3);
        return $result;
    }
}
