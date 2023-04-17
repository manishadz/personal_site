<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::where('is_active',1)->get();
        $about = About::first();
        $banner = Banner::first();
        return view('index', compact('about', 'banner' ,'skills'));
    }
}
