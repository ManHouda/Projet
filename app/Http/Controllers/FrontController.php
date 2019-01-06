<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
	{
		return view('frontview.home.homeContent');
	}

	public function addbook()
	{
		return view('frontview.addbooks');
	}

}
