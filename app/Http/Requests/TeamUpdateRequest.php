<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamUpdateRequest extends FormRequest
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
            'status'=>'required|in:"0", "1"',
            'slug'=>'required|string|max:255',
            'name'=>'required|string|max:50',
            'surname'=>'required|string|max:50',
            'description'=>'required|string',
            'profession'=>'required|string|max:100',
            'facebook'=>'required|string|max:300',
            'twitter'=>'required|string|max:300',
            'linkedin'=>'required|string|max:300',
            'email'=>'required|string|max:100',
            'phone'=>'required|string|max:20',
            'po_box'=>'required|string|max:100',
            'about'=>'required|string',
            'image'=>'nullable|image',
        ];
    }
}
