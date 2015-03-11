<?php namespace App\Http\Controllers;

use Input;
use Redirect;

use App\Category;
use App\Faq;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Requests\FaqRequest;

class FaqsController extends Controller {


    public function index(Category $category)
    {
        return view('faqs.index', compact('category'));
    }



    public function create(Category $category)
    {
        return view('faqs.create', compact('category'));
    }




    public function store(Category $category)
    {

        $input = Input::all();
        //var_dump($input);
        //exit;
        $input['category_id'] = $category->id;
        Faq::create( $input );

        return Redirect::route('categories.show', $category->id)->with('Faq has been Created Successfully.');
    }



    public function show(Category $category, Faq $faq)
    {
        return view('faqs.show', compact('category', 'faq'));
    }




    public function edit(Category $category, Faq $faq)
    {
        return view('faqs.edit', compact('category', 'faq'));
    }



    public function update(Category $category, Faq $faq)
    {
        $input = array_except(Input::all(), '_method');
        $faq->update($input);

        return Redirect::route('categories.show', [$category->id, $faq->id])->with('message', 'Question Updated.');
    }




    public function destroy(Category $category, Faq $faq)
    {
        $faq->delete();
        return Redirect::route('categories.show', $category->id)->with('message', 'Question has been Deleted Successfully.');
    }

}