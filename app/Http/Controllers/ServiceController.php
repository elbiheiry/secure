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
        $relates = Service::where('parent_id' , $service->id)->get();

        return view('site.pages.service' , ['service' => $service , 'relates' => $relates]);
    }
}
