<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string',
            'image' => 'nullable|mimes:jpg,png',
        ];
    }
    public function attributes()
    {
        return [
            //
            'name' => __('admin.name'),
            'image' =>  __('admin.image'),

        ];
    }
}
