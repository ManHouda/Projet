<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Book;




class AddController extends Controller
{
 public function add()
	{

		return view('frontview.inc.add');
	}

	public function Addbook(Request $request){

        $this->validate($request, [
            'titre'=>'required',
            'genre'=>'required',
            'auteur'=>'required',
            'edition'=>'required',
            'description'=>'required'
            ]);

        $book = new Book;
        $book->titre= ucfirst($request->input('titre'));
        $book->genre=  ucfirst($request->input('genre'));
        $book->auteur= ucfirst($request->input('auteur'));
        $book->edition=  ucfirst($request->input('edition'));
        $book->description=  ucfirst($request->input('description'));
        
       /******Verify input admin to avoid insering duplicata****/
       
        $verify=Book::where(ucfirst('titre'), $book->titre)->get();
        if($verify->count() > 0) {

            return  redirect('/AddBook'); 
        }

        else {

            $book->save();
            return redirect('/home');
       } 
        
	}
	


	public function rediriger()
	{
		if (Auth::user()->role == 0){
			return redirect('/home')->with('error','permission denied !'); 
			}
			else {
				return view('frontview.addbooks');
			}
	}



}
