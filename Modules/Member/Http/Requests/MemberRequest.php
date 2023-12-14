<?php

namespace Modules\Member\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;

class MemberRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $member = $this->isMethod('put') ? $this->member : null;
        return [
            'name' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'unique:members,email,'.$member->id],
            'password' => $this->isMethod('post') ? ['required' , Password::min(8)->mixedCase()->uncompromised()->numbers()->symbols()] : ($this->password ? Password::min(8)->mixedCase()->uncompromised()->numbers()->symbols() : '')
        ];
    }

    public function attributes()
    {
        $data = [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'password'
        ];

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
