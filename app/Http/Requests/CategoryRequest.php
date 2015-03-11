<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request {


	public function authorize()
	{
		//return false;
		return true;
	}


	public function rules()
	{
		return [
			'category' => 'required|min:3',
			'created_by' => 'required|min:3',
			'description' => 'required|min:5',
		];
	}

}
