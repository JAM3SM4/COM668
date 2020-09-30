<?php

namespace App\Http\Controllers;

class PostsController extends Controller

{

    // pubnlic function to show an array of posts
    /* public function show($post)

        {
            $posts = [
                'my-first-post' => 'Hello, this is my first blog post',
                'my-second-post' => 'Now I am getting the hang of this blogging thing.'
            ];

            if(! array_key_exists($post, $posts)) {
                abort(404, 'Sorry, that post was not found.');
            }

            return view('post', [
                'post' => $posts[$post]
            ]);
        }

} */

        //test for pulling data from the db using $slug

        public function show($slug)
        {
            $post = \DB::table('posts')->where('slug', $slug)->first();

            dd($post);

            return view('post', [
                    'post' => $post
                        
            ]);  
        }  
            
        

       //test for hello world to ensure function show works
       
        /* public function show()
        {
            return 'hello';
        }*/
    }

