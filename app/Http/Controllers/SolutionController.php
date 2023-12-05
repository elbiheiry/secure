<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Solution\Entities\Solution;

class SolutionController extends Controller
{
    public function index()
    {
        return view('site.pages.solutions');
    }

    public function solution(Solution $solution)
    {
        $relates = Solution::where('id' , '!=' , $solution->id)->inRandomOrder()->take(3)->get();

        return view('site.pages.solution' , ['solution' => $solution , 'relates' => $relates]);
    }
}
