<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 4/28/2019
 * Time: 10:33 PM
 */

namespace App\Http\Controllers;


use App\Document;
use App\User;

class UsersController extends Controller
{
    public function GetProfileUser($idUser){
        $u = User::where('id',$idUser)->first();
        $d=Document::where('USERID',$idUser)->get();

        return view('users_profile',compact('u','d' ));
       // return $d;
    }
}