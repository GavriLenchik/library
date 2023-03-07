<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function register(Request $request){

        User::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'login' => $request->input('login'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))

        ]);
        return view('login');
    }

    public function login(Request $request){
        $user = User::where('login', $request->input('login'))->first();
        if(Hash::check($request->input('password'), optional($user)->password)){
            $user->token = Hash::make(Str::random(16));
            $user->save();

            return redirect('api/books');
        }else{

            return "No User avaliable. You can Create!";
        }

    }

    //
}
