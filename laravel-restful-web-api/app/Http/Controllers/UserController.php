<?php

namespace App\Http\Controllers;

use Hash;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    //

    public function index(){
    	$users = User::all();

    	return UserResource::collection($users);
    }

    public function show($id){
    	$users = User::findOrFail($id);

    	return new UserResource($users);
    }

    public function store(Request $request){
    	$users = new User;
    	$users->name = $request->input('name');
    	$users->email = $request->input('email');
    	$users->password = Hash::make($request->input('password'));

    	if($users->save()){
    		return new UserResource($users);
    	}
    }

    public function update(Request $request){
    	$users = new Users;
    	$id = $request->input('id');
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$password = Hash::make($request->input('password'));
    	$users->where('id', $id)->update([
    		'name' => $name,
    		'email' => $email,
    		'password' => $password
    	]);

    	return new UserResource($users);
    }

    public function destroy($id){
    	$users = User::findOrFail($id);
    	if($users->delete()){
    		return new UserResource($users);
    	}
    }
}
