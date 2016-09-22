<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiVK extends Controller
{
    public function addTaskLike(){
        return view('user.forms.addLike');
    }

    public function addTaskFollow(){
        return view('user.forms.addFollow');
    }

    public function addTaskFriend(){
        return view('user.forms.addFriend');
    }

    public function addTaskInterview(){
        return view('user.forms.addInterview');
    }

    public function addTaskUserGroup(){
        return view('user.forms.addUserGroup');
    }

    public function addTaskSocial(){
        return view('user.forms.addSocial');
    }
}
