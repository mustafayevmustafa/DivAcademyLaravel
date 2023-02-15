<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingCreateRequest extends FormRequest
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
            'key'=>'required|string|max:255|unique:settings,key',
            'value'=>'required|string|max:255',
            'image'=>'image|nullable',
            'status'=>'required|in:"0", "1"',
        ];
    }
}
