<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function show($slug){
			
        //$post = \DB::table('posts')->where('slug', $slug)->first();
       // if(! $post){abort(404);} 
       
       //use eloquent  :
        $post = Post::where('slug', $slug)->firstOrFail();
        
        return view('post', [
                
            'post' => $post 
            //or
            // 'post' => Post::where('slug', $slug)->firstOrFail();
        ]);
    }
}
