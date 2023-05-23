<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        // dd($settings);
        return view('setting.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                $setting->value = $value;
                $setting->save();
            } else {
                Setting::create([
                    'key' => $key,
                    'value' => $value,
                ]);
            }
        }
        session()->flash('success', 'Setting Saved Successfully');

        return back();
    }
}
