<?php

namespace App\Http\Controllers;
use App\Http\Requests\SigninRequest;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index(){
    	return view('/pages/signin');
    }

     public function store(SigninRequest $request){

    }
}
