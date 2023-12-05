<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Service\Entities\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return view('site.pages.services');
    }

    public function service(Service $service)
    {
        $relates = Service::where('id' , '!=' , $service->id)->inRandomOrder()->take(3)->get();

        return view('site.pages.service' , ['service' => $service , 'relates' => $relates]);
    }
}
