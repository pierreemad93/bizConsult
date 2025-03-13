<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'address' => 'required|string',
            'phone' => 'required',
            'email' => 'required|email',
            'facebook' => 'required|url',
            'youtube' => 'required|url',
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
            'twitter' => 'required|url'
        ];
    }
    public function attributes()
    {
        return [
            //
            'address' => __('admin.address'),
            'phone' =>  __('admin.phone'),
            'email' =>  __('admin.email'),
            'facebook' =>  __('admin.facebook'),
            'youtube' =>  __('admin.youtube'),
            'instagram' => __('admin.instagram'),
            'linkedin' =>  __('admin.linkedin'),
            'twitter' =>  __('admin.twitter'),
        ];
    }
}
