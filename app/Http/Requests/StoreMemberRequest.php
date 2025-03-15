<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string',
            'position' => 'required|string',
            'image' => 'required|mimes:jpg,png',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url'
        ];
    }
    public function attributes()
    {
        return [
            //
            'name' => __('admin.name'),
            'position' => __('admin.position'),
            'image' =>  __('admin.image'),
            'facebook' =>  __('admin.facebook'),
            'linkedin' =>  __('admin.linkedin'),
            'twitter' =>  __('admin.twitter'),
        ];
    }
}
