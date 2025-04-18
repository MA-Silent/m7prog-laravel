<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(13);
        return view('dashboard.index', ['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $this->validate($request);

        $item = new Project($valid);
        $item->save();
        return redirect(route('project.show', $item->getKey()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $admin)
    {
        return view('dashboard.edit', ['project'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $admin)
    {
        $valid = $request->validate([
            'title' => 'required|max:255|unique:projects,id,'.$admin->id,
            'description' => 'required',
            'img' => File::image(),
        ]);

        $admin->update($valid);
        $admin->save();
        return redirect(route('project.show', $admin->getKey()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }

    protected function validate(Request $request){
        $valid = $request->validate([
            'title' => 'required|max:255|unique:projects',
            'description' => 'required',
            'img' => File::image(),
        ]);

        return $valid;
    }
}
