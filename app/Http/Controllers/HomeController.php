<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function Add(Request $request){

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

            return  redirect('/AddBook')->with('error','Car already existe!'); 
        }

        else {

            $book->save();
            return redirect('/')->with('info','created');
       } 
        
    }




}
