<?php

namespace Modules\Blog\Http\Requests\Dashboard;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = [
            'type' => ['required' , 'in:forum,blog']
        ];

        $data['image'] = $this->isMethod('post') ? ['required' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'] : ['nullable' , 'image' , 'mimes:jpeg,png,jpg,gif,svg' , 'max:2048'];

        foreach (config('translatable.locales') as $locale) {
            $data['title_' . $locale] = ['required' , 'string' , 'max:255'];
            $data['department_' . $locale] = ['required' , 'string' , 'max:255'];
            $data['description_' . $locale] = ['required'];    
        }

        return $data;
    }

    public function attributes()
    {
        $data = [
            'image' => 'Image',
            'type' => 'Type'
        ];

        foreach (config('translatable.locales') as $locale) {
            $data['title_' . $locale] = 'Title (' . strtoupper($locale) . ')';
            $data['department_' . $locale] = 'Department (' . strtoupper($locale) . ')';
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
