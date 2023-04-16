<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function welcome(){
        $blogs = Blog::all();
        return view('welcome')->with('blogs', $blogs);
    }
    public function index($blog_id){
        $detail = Blog::find($blog_id);
        return view('detailBlog')->with('detail', $detail);
    }
    public function userBlog(){
        $user_id = Auth::user()->id;
        $blogs = User::find($user_id);
        return view('blog')->with('blogs', $blogs->Blog);
    }
    public function deleteBlog($blog_id){
        DB::table('blogs')->where('id', $blog_id)->delete();
        return view('home');
    }
    public function addblogPage(){
        return view('addBlog');
    }
    public function addblogitem(Request $request){

        if ($request->categorie == 'Beach') {
            $request->categorie = '1';
        }else if($request->categorie == 'Mountain'){
            $request->categorie = '2';
        }
        
        DB::table('blogs')->insert([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'categorie_id' => $request->categorie,
            'image' => $request->image,
            'description' => $request->description
        ]);

        return view('home');

    }
}
