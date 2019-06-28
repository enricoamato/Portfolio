<?php

namespace App\Http\Controllers;

use App\Project; //added to have line 13 shorter

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        
        $projects = Project::all();
        $data = [];
        $data['projects'] = $projects;

        return view('projects.index', $data);
    }

    // public function store() {
    //     $projects = Project::all();
    //     $data = [];
    //     $data['projects'] = $projects;
    //     return $data;
    // }
}