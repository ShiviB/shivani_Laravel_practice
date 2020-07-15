<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Repositories\PostsRepository;
use App\Http\Requests\AddPostsRequest;

use App\User;
use Redirect;
use Session;

class PostsController extends Controller
{
    public function __construct(PostsRepository $posts,User $user )
    {
        $this->middleware('auth');
        $this->posts = $posts;
        $this->user = $user;
    }

    public function index()
    {
        return view('Admin.posts.index');
    }

    public function create()
    {
        return view('Admin.posts.create');
    }

    public function store(AddPostsRequest $request)
    {
        
        $post= $this->posts->store($request);
        if($post)
        {   
            return redirect()->route('admin.posts')->with('success','New Post added successfully');
        }else{
            return redirect()->route('admin.posts')->with('error','Something went wrong !!');
        }
       
    }

}
