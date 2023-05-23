<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Banner;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __invoke()
    {
        $skills = Skill::where('is_active',1)->get();
        $about = About::first();
        $banner = Banner::first();
        $projects = Project::where("is_active",1)->get();
        $settings = Setting::pluck('value','key');

        return view('index', compact('about', 'banner' ,'skills','projects','settings'));
    }
}
