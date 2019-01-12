<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Book;
use App\User;


class FrontController extends Controller
{
    public function index()
	{
		$users['users'] =  \App\User::all();
		$books['books'] = \App\Book::all();
		return view('frontview.home.homeContent',$users,$books);
	}

	public function authentication(){
		$users['users'] =  \App\User::all();
		$books['books'] = \App\Book::all();
		return view('auth.login',$users,$books);
	}


}
