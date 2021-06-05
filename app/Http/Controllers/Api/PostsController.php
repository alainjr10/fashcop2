<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    //
    public function getAllPosts() {
        $posts = Post::get()->toJson(JSON_PRETTY_PRINT);
        return response($posts, 200);
    }

    public function getPost($id) {
        if (Post::where('id', $id)->exists()) {
          $posts = Post::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($posts, 200);
        } else {
          return response()->json([
            "message" => "Post not found"
          ], 404);
        }
      }

    public function createPost(Request $request) {
        $posts = new Post;
        $posts->caption = $request->caption;
        $posts->location = $request->location;
        $posts->save();

        return response()->json([
            "message" => "Posts record created"
        ], 201);
    }

    public function updatePost(Request $request, $id) {
    if (Post::where('id', $id)->exists()) {
        $posts = Post::find($id);

        $posts->caption = is_null($request->caption) ? $posts->caption : $posts->caption;
        $posts->location = is_null($request->location) ? $posts->location : $posts->location;
        $posts->save();

        return response()->json([
        "message" => "records updated successfully"
        ], 200);
        } else {
            return response()->json([
            "message" => "Post not found"
            ], 404);
        }
    }
}
