@extends('layouts.app')

@section('content')

    <h1 class="text-4xl font-thin text-gray-900 dark:text-white">Projects</h1>

    @if ($projects->isNotEmpty())
            @foreach ($projects as $project)
                <a href="{{ route('projects.show', $project->id) }}" class="block m-3 p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $project->title }}</h5>
                </a>
            @endforeach
    @else
        <div class="mt-2 p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            No projects yet.
        </div>
    @endif


@endsection
