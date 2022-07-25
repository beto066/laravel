<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function test(){
        $posts = Post::paginate(3);


        $array = $posts;

        return response()->json($array);
    }

    public function getPosts(){

        $users = User::all();
        $posts = Post::paginate(2);

        return view('posts', compact(['posts', 'users']));
    }

    public function getPost(Post $post){
        return $post;
    }

    public function postBlogspot(Request $request){
        $this->validate($request ,[
           'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id'
        ]);

        $data = $request->only(['title', 'content', 'user_id']);
        $data['published'] = $request->has('published');

        Post::create($data);

        return redirect('/posts');
    }
}
