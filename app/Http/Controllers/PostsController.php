<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //

    public function CreatePost(Request $request){

        //check valid


        //Create new post.
        $title=$request->input('title');
        $censor=$request->input('censor');
        $des=$request->input('description');
        $creator=$request->input('creator');
        $content=$request->input('content');
        $category=$request->input('category');
        $status=true;
        $heart=$request->input('heart');
        $broken_heart=$request->input('broken_heart');
        $views=$request->input('views');
        echo "<script>console.log( $title.'' );</script>";
        DB::Insert('insert into posts(title,creator,description,censor,content,category,status,heart,broken_heart,views) values(?,?,?,?,?,?,?,?,?,?)',[$title,$creator,$des,$censor,$content,$category,$status,$heart,$broken_heart,$views]);
        return redirect('posts');
    }

    public function GetCreatePost(){
        return view('create_post');
    }

    public function GetPosts(){
        $p=DB::Select('select * from posts');
        return view('posts',compact('p'));
    }
}
