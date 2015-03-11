<?php namespace App\Http\Controllers;


use App\Category;
use App\Faq;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FaqController extends Controller {


	public function index()
	{
        //return view('faq.index');

        $faqs = Faq::all();
        $categories = Category::all();

        //var_dump($faqs); die();
        return view('faq.index', compact('categories', 'faqs'));
	}


	public function create()
	{
		//
	}


	public function store()
	{
		//
	}


	public function show($id)
	{
		//
	}


	public function edit($id)
	{
		//
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}

}
