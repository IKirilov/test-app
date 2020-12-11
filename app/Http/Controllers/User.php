<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User as Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class User extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function register (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'gender' => 'required',
            'password' => 'required'
        ]);

        if(!$validator->fails())
        {
            $user = new Model([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'password' => bcrypt($request->input('password'))
            ]);

            $user->save();

            return Redirect::route('login');
        }

        return 'Failure';
    }

    public function authenticate (Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];

        if (Auth::attempt($credentials))
        {
            $data = $request->input();
//          check if session is protected
            $request->session()->put('email', $data['email']);

            return Redirect::route('home');
        }

        return 'Failure';
    }
}
