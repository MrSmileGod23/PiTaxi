<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    public function register(Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'login'=>'required|unique:users|min:5',
            'email'=>'email|unique:users',
            'password'=>'required',
        ]);

        if($validator->fails())
            return response()->json([
                'errors'=>[
                    'message'=>'Vallidation error',
                    'errors'=>$validator->errors()]],422);
        $user = User::create(['password'=>Hash::make($request->password)]+ $request->all());

        return response()->json([
            'token'=>$user->generateToken()],201);

    }

    public function login(Request $request)
    {
        $request->validate([
            'login'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($request->only(['login','password']))){
            return 'Успешная аунтификация';
        }
        else{
            return  'Login or password incorrect';
        }


    }
    public function logout(){
        Auth::logout();
        return ('Вы вышли');
    }
}
