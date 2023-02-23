<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferCreateRequest extends FormRequest
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
            'title'=>'required|string|max:250',
            'image'=>'required|image',
            'video' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime,video/mov,video/flv,video/wmv,video/avs,video/mp4',
        ];
    }
}
