<?php

namespace Modules\Service\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ServiceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = [
            'image' => $this->isMethod('post') ? ['required' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'] : ['nullable' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'],
            'outer_image' => $this->isMethod('post') && $this->parent_id == 0 ? ['required' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'] : ['nullable' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'],
            // 'icon' => ['required' , 'string' ,'max:225']
        ];

        foreach (config('translatable.locales') as $locale) {
            $data['name_' . $locale] = ['required' , 'string' , 'max:255'];
            $data['description_' . $locale] = ['required'];    
        }

        return $data;
    }

    public function attributes()
    {
        $data = [
            'image' => 'Image',
            'outer_image' => 'Outer image',
            'icon' => 'Icon'
        ];

        foreach (config('translatable.locales') as $locale) {
            $data['name_' . $locale] = 'Name (' . strtoupper($locale) . ')';
            $data['description_' . $locale] = 'Description (' . strtoupper($locale) . ')';
        }

        return $data;
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     *
     * @throws HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->first(), 400));
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
