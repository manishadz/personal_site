<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contacts=Contact::count();
        $skills=Skill::count();
        $projects=Project::count();
        return view('dashboard',compact('projects','skills','contacts'));
    }

    public function password()
    {
        return view('change-password');
    }

    // to change password
    public function changePassword(Request $request)
    {

        # Validation
        $request->validate([
            'password' => ['required', 'string', 'min:9', 'confirmed'],
        ]);


        if (!Hash::check($request->current_password, $request->user()->password)) {
            return back()->withErrors([
                'current_password' => ['The provided password does not match our records.']
            ]);
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);
        Auth::logout();
        // return redirect()->url('/');

        return redirect()->route("/")->with("status", "Password changed successfully!");
}

}
