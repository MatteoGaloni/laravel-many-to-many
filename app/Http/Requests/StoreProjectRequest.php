<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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

    public function rules()
    {
        return [
            'title' => 'required|min:4',
            'description' => 'nullable|max:100',
            'img' => 'nullable|url',
            'type_id' => 'nullable|exists:types,id',
            //
        ];
    }
}
