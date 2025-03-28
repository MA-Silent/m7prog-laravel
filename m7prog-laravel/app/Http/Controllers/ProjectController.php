<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add(){
        $project = new Project();
        $project->title = 'My Title';
        $project->description = 'My Story';
        $project->active = true;
        $project->save();
    }
}
