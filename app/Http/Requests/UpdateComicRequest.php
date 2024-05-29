<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            [
                'title'=>'required|max:255|min:3',
                'description'=> 'nullable|max:255',
                'thumb'=> 'nullable|max:255',
                'price'=> 'required:decimal:2|min:2',
                'series'=> 'required|max:255',
                'sale_date'=> 'required|date',
                'type'=> 'required|max:50',,
            ]
        ];
    }
}
