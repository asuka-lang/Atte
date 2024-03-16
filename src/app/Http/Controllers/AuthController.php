<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Work;

class AuthController extends Controller
{
    public function index()
    {
        $auth = auth()->user()->id;
        $user = User::find($auth);
        $work_id = Work::latest('start')->first()->id;
        if(!$work_id){
            return view('index',compact('user'));
        }else{
            return view('index',compact('user','work_id'));
        }
    }
}
