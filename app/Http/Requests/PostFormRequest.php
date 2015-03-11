<?php namespace App\Http\Requests;

use Response;
use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest {

    public function rules()
    {
        return [
            'title' => 'required',
            'image' => 'mimes:jpeg,bmp,png'
        ];
    }

    public function  authorize()
    {
        $image = $this->image;
        if(empty($image))
            return true;
        else
            return false;
    }

    public function forbiddenResponse()
    {
        return Response::make('Sorry!',403);
    }
}
