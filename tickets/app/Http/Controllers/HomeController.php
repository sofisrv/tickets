<?php

namespace tickets\Http\Controllers;

use tickets\Http\Requests;
use Illuminate\Http\Request;

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
	
	public function inicio()
    {
        return view('index');
    }
	
	public function outlook()
    {
        return view('index');
    }
	
	public function correo()
    {
        return view('index');
    }
	
	
	public function caso()
    {
        $inputs=Input::all();
		$escritor_id = $inputs['id'];
    }
	
	public function knowledge()
    {
        return view('knowledge');
    }
	
	
}
