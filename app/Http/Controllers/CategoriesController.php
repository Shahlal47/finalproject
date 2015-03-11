<?php namespace App\Http\Controllers;

use Input;
use Redirect;

use App\Category;
use App\Faq;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller {

	public function index()
	{
        //$faqs = Faq::all();
        $categories = Category::all();
        //var_dump($faqs); die();
        return view('categories.index', compact('categories'));
	}

	public function create()
	{
        return view('categories.create');
	}


    public function store(CategoryRequest $category)
    {
        $input = Input::all();
        Category::create($input);

        return Redirect::route('categories.index')->with('message', 'New Category has been Created Successfully');
    }

	public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }



    public function edit(Category $category)
    {
        //dd($category);
        return view('categories.edit', compact('category'));
    }



    public function update(Category $category)
    {
        $input = array_except(Input::all(), '_method');
        $category->update($input);

        return Redirect::route('categories.index')->with('message', 'Category is updated Successfully.');
    }



    public function destroy(Category $category)
    {
        $category->delete();

        return Redirect::route('categories.index')->with('message', 'Selected Category has been Deleted Successfully.');
    }

    public function category()
    {
        $categories = Category::all();
        return view('categories.category', compact('categories'));
    }

}
