<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('User.index',['users'=>$users]);
        //return User::all();
        //return Response::json(dato,'dato');

    }
    public function show(User $user){
    	return $user;
    }
    public function delete(User $user){
    	$user->delete();
    }
}
