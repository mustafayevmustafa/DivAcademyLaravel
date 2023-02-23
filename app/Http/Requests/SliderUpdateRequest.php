<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdateRequest extends FormRequest
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
            'status' => 'required|in:"0", "1"',
            'subtitle' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'button_title' => 'nullable|string|max:255',
            'button_url' => 'nullable|url|max:255',
            'image' => 'nullable|image',
        ];
    }
}
