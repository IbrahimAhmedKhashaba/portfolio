<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:13|min:11',
            'birthdate' => 'required|date',
            'address' => 'required|string',
            'position' => 'required|string|max:255',
            'cv' => 'mimes:pdf|max:2048',
            'location' => 'required|string|max:255',
            'facebook' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'github' => 'required|string|max:255',

            'hours_worked' => 'required|numeric',
            'client_count' => 'required|numeric',
            'cofe_drinked' => 'required|numeric',

            'slider' => 'image|mimes:png,PNG,jpeg,JPEG,jpg,JPG',
            'image' => 'image|mimes:png,PNG,jpeg,JPEG,jpg,JPG',
        ];
    }
}
