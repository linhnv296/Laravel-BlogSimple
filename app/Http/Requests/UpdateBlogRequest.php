<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'fImages' => 'mimes:jpeg,png,bmp,gif,svg,jpg',
        ];
    }
    public function messages()
    {
        $messages = [
            'txtBlogName.required' => 'Cần nhập tên blog!',
            'txtcontent.required' => 'Cần nhập nội dung blog!',
            'fImages.mimes' => 'File ảnh có định dạng: jpeg,png,bmp,gif,svg,jpg',
        ];
        return $messages;
    }
}
