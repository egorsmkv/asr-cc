<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;
use Illuminate\Http\RedirectResponse;

class ProjectsController extends Controller
{
    /**
     * Show the new project.
     *
     * @param Request $request
     * @param string $id
     * @return View
     */
    public function show(Request $request, string $id): View
    {
        $project = Project::find($id);
        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }

    /**
     * Create a new project.
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request): View
    {
        return view('projects.create');
    }

     /**
     * Save a new project.
     *
     * @param CreateProjectRequest $request
     * @return RedirectResponse
     */
    public function save(CreateProjectRequest $request): RedirectResponse
    {

        $project = new Project();
        $project->title = $request->input('title');
        $project->save();

        flash()->success('The project is created!');

        return back();
    }
}
