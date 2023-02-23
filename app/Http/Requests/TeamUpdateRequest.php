<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $id = $this->route('team');

        return [
            'status'=>['required','in:"0", "1"'],
            'slug'=>['required','string','max:255',Rule::unique("teams", "slug")->ignore($id)],
            'name'=>['required','string','max:50'],
            'surname'=>['required','string','max:50'],
            'description'=>['required','string'],
            'profession'=>['required','string','max:100'],
            'facebook'=>['required','url','max:300'],
            'twitter'=>['required','url','max:300'],
            'linkedin'=>['required','url','max:300'],
            'email'=>['required','email','max:100'],
            'phone'=>['required','string','max:20'],
            'po_box'=>['required','string','max:100'],
            'pdf_file'=>['nullable','mimes:pdf'],
            'about'=>['required','string'],
            'image'=>['nullable','image'],
        ];
    }
}
