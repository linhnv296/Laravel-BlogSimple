<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtBlogName'=>'required',
            'txtcontent' =>'required',
            'fImages' => 'required|mimes:jpeg,png,bmp,gif,svg,jpg',
        ];
    }
    public function messages()
    {
        $messages = [
            'txtBlogName.required' => 'Cần nhập thông tin!',
            'txtcontent.required' => 'Cần nhập thông tin Content!',
            'fImages.required' => 'Cần input file image!',
            'fImages.mimes' => 'File ảnh có định dạng: jpeg,png,bmp,gif,svg,jpg',

        ];
        return $messages;
    }
}
