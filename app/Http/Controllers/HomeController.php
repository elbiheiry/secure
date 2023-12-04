<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Blog\Entities\Article;
use Modules\Branch\Entities\Branch;
use Modules\Message\Entities\Message;
use Modules\Service\Entities\Service;
use Modules\Slideshow\Entities\Slideshow;
use Modules\Solution\Entities\Solution;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slideshow::all()->sortByDesc('id');
        $services = Service::all()->sortByDesc('id')->take(3);
        $solutions = Solution::all()->sortByDesc('id');
        $articles = Article::all()->sortByDesc('id')->take(3);
        $branches = Branch::all();

        return view('site.pages.index' , [
            'sliders' => $sliders,
            'services' => $services,
            'solutions' => $solutions,
            'articles' => $articles,
            'branches' => $branches
        ]);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all() , [
            'name' => ['required' , 'string' , 'max:255'],
            'email' => ['required' , 'email' , 'max:255'],
            'phone' => ['required'],
            'subject' => ['required' , 'string' , 'max:255'],
            'message' => ['required'],
        ] ,[] ,[
            'name' => locale() == 'en' ? 'Name' : 'الإسم بالكامل',
            'email' => locale() == 'en' ? 'Email' : 'البريد الإلكتروني',
            'phone' => locale() == 'en' ? 'Phone' : 'رقم الهاتف',
            'subject' => locale() == 'en' ? 'Subject' : 'عنوان الرسالة',
            'message' => locale() == 'en' ? 'Message' : 'الرسالة'
        ]);

        if ($validation->fails()) {
            return failed_validation($validation->errors()->first());
        }

        try {
            Message::create($request->all());

            $url = url()->previous();
            return success_response(locale() == 'en' ? 'Your message has been sent , we will reply ASAP' : 'تم إرسال رسالتك وسيتم التواصل معاك في أقرب وقت  ممكن' , $url);
        } catch (\Throwable $th) {
            return error_response();
        }
    }
}
