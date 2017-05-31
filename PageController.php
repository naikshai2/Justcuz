<?php

namespace App\Http\Controllers;

class PageController extends Controller {
	
	public function call() {
		return view('call');
	}
	
	public function welcome() {
		return view('welcome');	
	}
	
	public function home() {
		return view('page.home');	
	}
	public function calculators()
	{
     return view('calculator');
	}
	public function calculators2()
	{
     return view('FlipHouse');
	}
	public function calculators1()
	{
     return view('ROI');
	}
	public function calculators3()
	{
		return view('Amoritize');
	}
	public function agents() {
		return view('page.agents');	
	}
	
	public function assetManagers() {
		return view('page.assetManagers');	
	}
	
	public function about() {
		return view('page.about');	
	}
	
	public function faqs() {
		return view('page.faqs');	
	}
	
	public function contact() {
		return view('page.contact');	
	}
	
	
}
