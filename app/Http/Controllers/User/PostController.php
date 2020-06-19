<?php

namespace App\Http\Controllers\User;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show($id) {
    	// $this->authorize('view-post');
    	// $post = Post::findOrFail($id);

    	$post = Post::findOrFail($id);

    	$this->authorize($post, 'view');
    	
    	return view('post_show', compact('post'));
    }
}
