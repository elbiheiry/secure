<?php

namespace App\Http\Controllers;

use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Career\Entities\Candidate;
use Modules\Career\Entities\Career;

class CareerController extends Controller
{
    use ImageTrait;

    public function index()
    {
        $careers = Career::all()->sortByDesc('id');

        return view('site.pages.careers' , ['careers' => $careers]);
    }

    public function career(Career $career)
    {
        return view('site.pages.career' , ['career' => $career]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all() , [
            'name' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'email' , 'max:255'],
            'phone' => ['required'],
            'title' => ['required' , 'string' , 'max:255'],
            'cv' => ['required' , 'file'],
        ] ,[] ,[
            'name' => locale() == 'en' ? 'Name' : 'الإسم بالكامل',
            'email' => locale() == 'en' ? 'Email' : 'البريد الإلكتروني',
            'phone' => locale() == 'en' ? 'Phone' : 'رقم الهاتف',
            'title' => locale() == 'en' ? 'Job title' : 'المسمي الوظيفي',
            'cv' => locale() == 'en' ? 'CV' : 'السيرة الذاتية'
        ]);

        if ($validation->fails()) {
            return failed_validation($validation->errors()->first());
        }

        try {
            $data = $request->except('cv');

            $data['cv'] = $this->image_manipulate($request->cv , 'careers');

            Candidate::create($data);

            $url = url()->previous();
            return success_response(locale() == 'en' ? 'Your message has been sent , we will reply ASAP' : 'تم إرسال رسالتك وسيتم التواصل معاك في أقرب وقت  ممكن' , $url);
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
