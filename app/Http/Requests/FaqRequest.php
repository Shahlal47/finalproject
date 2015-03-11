<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FaqRequest extends Request {


	public function authorize()
	{
		return false;
	}


	public function rules()
	{
		return [
			'faq' => 'required',
			'created_by' => 'required|min:3',
			'description' => 'required|min:5',
		];
	}

}
