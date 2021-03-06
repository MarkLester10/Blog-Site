<?php

namespace App\Http\Controllers\User;

use App\Model\User\Post;
use App\Model\User\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function blog(){
        $posts=Post::where('status',1)->paginate(5);
        return view('user.blog', compact('posts'));
    }

    public function resume(){
        return view('user.about');
    }

    public function tag(){
        // return $request->all()
    }
    public function category($slug){
        $category = Category::where('slug',$slug)->get();
        return request->all();
    }
}
