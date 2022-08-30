<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('index1.html');
	}
	public function index3()
	{
		return view('index3.html');
	}
	public function dashboard()
	{
		
		return view('dashboard.php');
	}
	//huruf
	public function J()
	{
		return view('jcoders/J.html');
	}
	public function C()
	{
		return view('jcoders/C.html');
	}
	public function O()
	{
		return view('jcoders/O.html');
	}
	public function D()
	{
		return view('jcoders/D.html');
	}
	public function E()
	{
		return view('jcoders/E.html');
	}
	public function R()
	{
		return view('jcoders/R.html');
	}
	public function S()
	{
		return view('jcoders/S.html');
	}
	public function N()
	{
		return view('jcoders/N.html');
	}
	public function B()
	{
		return view('jcoders/B.html');
	}
	public function H()
	{
		return view('jcoders/H.html');
	}
	
}
