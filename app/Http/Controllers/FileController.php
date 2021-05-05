<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Events\PostCreated;
class FileController extends Controller
{
    public function upload(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        event(new PostCreated($post));
        return response()->json(['message'=>'Saved successfully!'],200);

    }
}
