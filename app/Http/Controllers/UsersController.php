<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Hong Phuc
 * Date: 4/28/2019
 * Time: 10:33 PM
 */

namespace App\Http\Controllers;


use App\User;

class UsersController extends Controller
{
    public function GetProfileUser($idUser){
        $u = User::where('id',$idUser)->first();
        return "Hello". $u;
    }
}