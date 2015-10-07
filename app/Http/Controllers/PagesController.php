<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\CreateRegistrationRequest;
use App\provider_regs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
//use Response;
//use Input;

class PagesController extends Controller
{

    public function display(){

        $users = provider_regs::latest('regi_at')->get();
        return view('display',compact('users'));
    }
    public function register(){
        View::addExtension('html', 'php');
        return view('register');
    }

    public function store(CreateRegistrationRequest $request){

        $rand = mt_rand(1000,9999).mt_rand(1000,9999);
        $rand_id = str_shuffle($rand);


        $input = Request::all();

        $input['regi_at'] = Carbon::now();
        $input['auto_id'] = $rand_id;

        provider_regs::create($input);

        return redirect('display');

    }

}



