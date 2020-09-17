<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{
    public function index(){
    	return view('/pages/signup');
    }

    public function store(SignupRequest $request){
        
    }
}
