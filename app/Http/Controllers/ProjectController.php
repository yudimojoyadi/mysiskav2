<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function ProjectAll()
    {
        return view('backend.pages.project.project_all');
    }

    public function ProjectNew()
    {
        return view('backend.pages.project.project_new');
    }

    public function ProjectEdit()
    {
        return view('backend.pages.project.project_edit');
    }

    public function ProjectDetail()
    {
        return view('backend.pages.project.project_detail');
    }
}
