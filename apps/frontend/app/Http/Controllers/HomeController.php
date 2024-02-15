<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Show the home page.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $projects = Project::query()->orderBy('created_at', 'desc')->get();

        return view('home', compact('projects'));
    }
}
