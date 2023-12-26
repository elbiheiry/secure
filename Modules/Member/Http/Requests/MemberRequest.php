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
        $data =[
            'name' => ['required' , 'string' , 'max:255'],
        ];
        if($this->isMethod('put')){
            $data['email'] = ['required' , 'unique:members,email,'.$member->id];
            $data['password'] = $this->password ? Password::min(8)->mixedCase()->uncompromised()->numbers()->symbols() : '';
        }else{
            $data['email'] = ['required' , 'unique:members,email'];
            $data['password'] = ['required' , Password::min(8)->mixedCase()->uncompromised()->numbers()->symbols()];
        }
        
        return $data;
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
