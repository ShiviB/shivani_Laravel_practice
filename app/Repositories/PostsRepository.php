<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

//use Your Model

/**
 * Class PostsRepository.
 */
class PostsRepository 
{
    private $user,$post;
    public function __construct(User $user,Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    public function store($request)
    {
        $user_id = Auth::getuser()->id;
        $slug = Str::slug($request->title, '-');
        $featured_image = Storage::put('featured_image', $request->featured_image);
        return $this->post->create([ 'user_id' => $user_id,'slug' => $slug,'title' => $request->title,'description' => $request->description,'featured_image'=>$featured_image]);
        
    }

}
