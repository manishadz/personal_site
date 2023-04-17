<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\SkillStoreRequest;
use App\Http\Requests\SkillUpdateRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::get();

        return view('skill.index', compact('skills'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillStoreRequest $request)
    {

        $validated = $request->validated();
        $skill = Skill::create($validated);
        if ($skill) {
            session()->flash('success', 'member created');
        } else {
            session()->flash('error', 'something went wrong');
        }
        return to_route('skill.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        // $skill =Skill::findOrfail($id);

        return view('skill.edit', compact('skill'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillUpdateRequest $request,  $id)
    {
        $skill = Skill::findOrFail($id);
        $validated = $request->validated();
        $success = $skill->update($validated);
        if ($skill) {
            session()->flash('success', 'skill updated');
        } else {
            session()->flash('error', 'something went wrong');
        }
        return to_route('skill.index');
        return to_route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        // return $skill;
        // dd("hel");
        $success = $skill->delete();
        if ($success) {
            session()->flash('success', 'skill deleted');
        } else {
            session()->flash('error', 'something went wrong');
        }
        return to_route('skill.index');
    }
}
