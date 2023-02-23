<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AboutUpdateRequest extends FormRequest
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
        $id = $this->route('about');

        return [
            'slug'=>['required','string','max:255',Rule::unique('abouts', 'slug')->ignore($id)],
            'icon_title'=>['required','string','max:50'],
            'title'=>['required','string','max:255'],
            'description'=>['required','string'],
            'status'=>['required','in:"0", "1"'],
            'content'=>['required','string'],
            'icon'=>['image','nullable'],
        ];
    }
}
