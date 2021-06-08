<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

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


      $validator = Validator::make($request->all(),[ 
        'image' => 'required|mimes:doc,docx,pdf,txt,csv,jpg,png|max:2048',
      ]);   
      
      if($validator->fails()) {          
          
          return response()->json(['error'=>$validator->errors()], 401);                        
      } 

      if ($file = $request->file('image')) {
        $path = $file->store('uploads', 'public');
        $name = $file->getClientOriginalName();

        //store your file into directory and db
        $save = new Post();
        //$save->caption = $file;
        $save->caption = $request->caption;
        $save->image= $path;
        $save->location = $request->location;
        $save->budget = $request->budget;
        //$save->image = $image;
        $save->user_id = 9;
        $save->save();
           
        return response()->json([
            "success" => true,
            "message" => "File successfully uploaded",
            "file" => $file
        ]);

    }


    //   $data = request()->validate([
    //     'caption'=>'required',
    //     'location'=>'required',
    //     'budget'=>'required',
    //     'image'=>['required', 'image'],
    // ]);

    //dd(request('image')->store('uploads', 'public'));
  //   $imagePath = request('image')->store('uploads', 'public');
  //   $image = Image::make(public_path("/storage/{$imagePath}"))->fit('1200', '800');

  
  //   $image->save();

  //   $aPost = Post::create([
  //     'caption' => $request->caption,
  //     'location' => $request->location,
  //     'budget' => $request->budget,
  //     'image' => $imagePath,
  //     'user_id' => 9,
  // ]);
  // $aPost->save();
      
  //       // $posts = new Post;
  //       // $posts->caption = $request->caption;
  //       // $posts->location = $request->location;
  //       // $posts->budget = $request->budget;
  //       // $posts->image = $image;
  //       // $posts->user_id = 9;
  //       // $posts->save();

  //       //return ($request->caption);
  //       return response()->json([
  //           "message" => "Posts record created"
  //       ], 201);
    }

    public function store(Request $request, Post $aPost)
    {
        // $data = request()->validate([
        //     'caption'=>'required',
        //     'location'=>'required',
        //     'budget'=>'required',
        //     'image'=>['image'],
        // ]);

        //dd(request('image')->store('uploads', 'public'));

        $validator = Validator::make($request->all(), 
              [ 
              //'user_id' => 'required',
              'image'  => 'required|max:2048',
              //'file' => 'required|mimes:doc,docx,pdf,txt|max:2048',
             ]);   
 
    if ($validator->fails()) {          
            return response()->json(['error'=>$validator->errors()], 401);                        
         }  
 
  
        if ($files = $request->file('image')) {
             
            //store file into document folder
            $file = $request->file->store('public/image');
 
            //store your file into database
            $document = new Post();
            $document->location = $request->location;
            $document->budget = $request->budget;
            $document->caption = $request->caption;
            $document->image = $file;
            $document->user_id = 9;
            $document->save();
              
            return response()->json([
                "success" => true,
                "message" => "File successfully uploaded",
                "file" => $file
            ]);
  
        }
 
      //   $imagePath = request('image')->store('uploads', 'public');
      //   $image = Image::make(public_path("/storage/{$imagePath}"))->fit('1200', '800');
      //   $image->save();

      //   auth()->user()->posts()->create([
      //       'caption' => $data['caption'],
      //       'location' => $data['location'],
      //       'budget' => $data['budget'],
      //       'image' => $imagePath,
      //   ]);

      //   $aPost = Post::create([
      //     'caption' => $request->caption,
      //     'location' => $request->location,
      //     'budget' => $request->budget,
      //     //'image' => $imagePath,
      // ]);

      // $aPost->save();

      //   return $aPost;

        
        //dd(request()->all());
        //return redirect('/profile/' . auth()->user()->id);
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
