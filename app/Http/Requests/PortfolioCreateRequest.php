<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioCreateRequest extends FormRequest
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
            'cat_id'=>'required|integer|exists:App\Models\Category,id',
            'subtitle'=>'required|string|max:255',
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'image'=>'required|image',
        ];
    }
}
