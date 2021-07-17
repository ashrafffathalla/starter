<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    function showUserName(){
        return'Hello, Ashraf';
    }

    public function getindex(){

/*
        $data=[];
        $data['id']=5;
        $data['name']='ashraf';
        return view('welcome',$data);*/

        $data=[];

        return view('welcome',compact('data'));
    }

}
