<?php

namespace App\Http\Controllers;

use App\Models\Project;
use DB;

class ProjectController extends Controller
{
    public function create(){
        $project = new Project();
        $project->title = 'My Title';
        $project->description = 'My Story';
        $project->active = true;
        $project->save();
    }

    public function index(){
        $projects = Project::where('active',1)
            ->orderBy('title')
            ->take(10)
            ->get();
        return view('index', ['projects' => $projects,"affected"=>0]);
    }

    public function update(){
        $affected = DB::update('UPDATE projects SET active = true WHERE id = ?',[0]);
        $projects = DB::select('SELECT * FROM projects');
        return view('index', ['projects' => $projects, "affected"=>$affected]);
    }

    public function delete(){
        $affected = DB::delete('DELETE FROM projects WHERE id = ?',[0]);

        $projects = DB::select('SELECT * FROM projects');
        return view('index', ['projects' => $projects, "affected"=>$affected]);
    }
}
