<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class User extends Controller
{
    public function index(){
        return view('user.pages.main');
    }

    public function board(){
        return view('user.pages.board');
    }

    public function spend(){
        return view('user.pages.vkontakte.spend');
    }

    public function work(){
        return view('user.pages.vkontakte.work');
    }

    public function partner(){
        return view('user.pages.referal');
    }

    public function feedback(){
        return view('user.pages.feedback');
    }

    public function teh(){
        return view('user.forms.feedback.tehForm');
    }

    public function store(){
        return view('user.pages.store');
    }

    public function news(){
        return view('user.pages.news');
    }
}
