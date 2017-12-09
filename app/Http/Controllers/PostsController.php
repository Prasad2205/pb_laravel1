<?php

namespace App\Http\Controllers;
use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{	
	public function index()
	{
		//return view('posts.index');
	}

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {
    	//Create new post 
    	//$post = new Post;

    	//save to database and redirect to new page
    		Posts::create(request(['post-title','post-content']));

    		return redirect('/');
    }
}
