<?php

namespace Modules\Slideshow\Http\Requests\Dashboard;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SlideshowRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = [
            'image' => $this->has('image') ? ['required' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'] : ['nullable' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048']
        ];

        foreach (config('translatable.locales') as $locale) {
            $data['title_' . $locale] = ['required' , 'string' , 'max:255'];
        }

        return $data;
    }

    public function attributes()
    {
        $data = [
            'image' => 'Image'
        ];

        foreach (config('translatable.locales') as $locale) {
            $data['title_' . $locale] = 'Title (' . strtoupper($locale) . ')';
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
