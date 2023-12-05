<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Branch\Entities\Branch;

class ContactController extends Controller
{
    public function index()
    {
        $branches = Branch::all()->sortByDesc('id');

        return view('site.pages.contact' , ['branches' => $branches]);
    }
}
