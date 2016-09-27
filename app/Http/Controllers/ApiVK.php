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

    public function addTaskSocialComments(){
        return view('user.forms.addComment');
    }

//

    public function tableAddAll(){
        return view('user.tablesWork.tableGoAddAll');
    }

    public function tableAddLike(){
        return view('user.tablesWork.tableGoAddLike');
    }

    public function tableAddFollow(){
        return view('user.tablesWork.tableGoAddFollow');
    }

    public function tableAddFriend(){
        return view('user.tablesWork.tableGoAddFriend');
    }

    public function tableAddInterview(){
        return view('user.tablesWork.tableGoAddInterview');
    }

    public function tableAddGroup(){
        return view('user.tablesWork.tableGoAddGroup');
    }

    public function tableAddSocial(){
        return view('user.tablesWork.tableGoAddSocial');
    }

    public function tableAddComments(){
        return view('user.tablesWork.tableGoAddComment');
    }
}
