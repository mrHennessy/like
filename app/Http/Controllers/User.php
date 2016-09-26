<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class User extends Controller
{
    public function index(){
        return view('user.main');
    }

    public function board(){
        return view('user.board');
    }

    public function spend(){
        return view('user.pages.vkontakte.spend');
    }

    public function work(){
        return view('user.pages.vkontakte.work');
    }

    public function partner(){
        return view('user.partner');
    }

    public function feedback(){
        return view('user.feedback');
    }

    public function store(){
        return view('user.store');
    }

    public function free(){
        return view('user.free');
    }
}
