<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\About\Entities\About;
use Modules\About\Entities\Work;

class AboutController extends Controller
{
    public function index()
    {
        $first_section = About::find(1);
        $abouts = About::all()->except(1);
        $work = Work::first();

        return view('site.pages.about' ,[
            'first_section' => $first_section,
            'abouts' => $abouts,
            'work' => $work
        ]);
    }
}
