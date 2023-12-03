<?php

namespace Modules\About\Http\Requests\Dashboard;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class WorkRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = [
        ];

        foreach (config('translatable.locales') as $locale) {
            $data['description1_' . $locale] = ['required'];
            $data['description2_' . $locale] = ['required'];    
        }

        return $data;
    }

    public function attributes()
    {
        $data = [
        ];

        foreach (config('translatable.locales') as $locale) {
            $data['description1_' . $locale] = 'First description (' . strtoupper($locale) . ')';
            $data['description2_' . $locale] = 'Second description (' . strtoupper($locale) . ')';
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