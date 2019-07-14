<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'txtCateName'=>'required',
            'desc' =>'required',
            'fImages' => 'required|mimes:jpeg,png,bmp,gif,svg,jpg',

        ];
    }
    public function messages()
    {
        $messages = [
            'txtCateName.required' => 'Cần nhập tên chuyên mục !',
            'desc.required' => 'Cần nhập mô tả !',
            'fImages.required' => 'Cần input file image!',
            'fImages.mimes' => 'File ảnh có định dạng: jpeg,png,bmp,gif,svg,jpg',

        ];
        return $messages;
    }
}
