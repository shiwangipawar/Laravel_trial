<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\provider_regs;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateRegistrationRequest;
use View;

class UserController extends Controller
{
    public function getLogin(){
        View::addExtension('html', 'php');
        return view('login');

    }
    public function postLogin(Request $request){

        $flag = 0;

        $users = provider_regs::all();
        $input = Request::all();

        foreach($users as $dbdata){
            if($dbdata->email == $input['email'] && $dbdata->pass == $input['password'])
                $flag = 1;
            else
                $flag = 0;
        }
        if($flag){
            View::addExtension('html', 'php');
                return redirect('display');
        }
        else{
            View::addExtension('html', 'php');
//            return redirect('login')->withErrors(['email'=>'Please Register']);
                return redirect('login');
        }
    }
}
