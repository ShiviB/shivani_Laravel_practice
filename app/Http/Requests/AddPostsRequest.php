<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostsRequest extends FormRequest
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
        if(!empty($this->id))
         {
          return [
              'title' =>'required|unique:posts,title,' . $this->id,
              'description' => 'required|unique:posts,description,' . $this->id,
              'featured_image' => 'required'
          ];
         }else{
          return [
            'title' => 'required',
            'description' => 'required',
            //'operator_type' => 'required',
            'featured_image'=>'required'
          ];
         }
        
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'=>'Post Title is required',
            'description.required'=>'Description is required',
            'featured_image.required'=>'Image is required'
        ];
    }
}