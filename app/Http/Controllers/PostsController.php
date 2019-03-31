<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function Sodium\add;

class PostsController extends Controller
{
    //

    public function CreatePost(Request $request){

        //check valid


        //Create new post.
        if(Auth::check() and Auth::user()->LEVEL>0)
        $id_user=Auth::user()->id;
        else
            $id_user=1;

        $title=$request->input('title');
        $censor=$request->input('censor');
        $des=$request->input('description');
        $creator=$request->input('creator');
        $content=$request->input('content');
        $category=$request->input('category');
        echo "<script>console.log( $title.'' );</script>";
        DB::Insert('insert into posts(id_user,title,creator,description,censor,content,category,status,heart,broken_heart,views) values(?,?,?,?,?,?,?,?,?,?,?)',[$id_user,$title,$creator,$des,$censor,$content,$category,false,0,0,0]);
        return redirect('posts');
    }

    public function GetCreatePost(){
        return view('create_post');
    }

    public function GetPosts(){
        $p=DB::Select('select * from posts');
        return view('posts',compact('p'));
    }

    public function GetPost($id){
        $po=DB::Select('select * from posts where id= ?',[$id]);
       // $p=Posts::where('id','=',$id);

        return view('post',compact('po'));
//        return view('post',['ar'=>$po]);
//        return view('post')->with('myvar', $po);

        // return $po;
    }

    public function DeletePost($id){
        if(Auth::check() and Auth::user()->LEVEL>0){
            $IDpo=DB::select("select id_user from posts where id = ?",[$id]);
            if($IDpo==null)
                return redirect('post/'.$id)->withErrors(['po'=>['Post do not exist']]);

            if(Auth::user()->id==$IDpo[0]->id_user)
            {
                $count=DB::delete("delete from posts where id = ?",[$id]);
                if($count>0)
                {

                    Session::flash('message', "delete post success");
                    return redirect('posts');
                }
                else
                    return redirect('post/'.$id)->withErrors(['db'=>['Sorry, We can not delete this post']]);
            }
            return redirect('post/'.$id)->withErrors(['account'=>['You do not delete post of other user']]);
        }
        else
            return redirect('post/'.$id)->withErrors(['account'=>['You do not have permission delete this post, please login to do it']]);
    }
}
