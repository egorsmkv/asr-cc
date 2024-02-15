@extends('layouts.app')

@section('content')

    <h1 class="text-4xl font-thin text-gray-900 dark:text-white">Project: #{{ $project->id }}</h1>

    <h2 class="text-4xl font-thin text-gray-900 dark:text-white">Tools</h2>

    <ul>
        <li>
            <a href="">Export links to playlists from a channel</a>
        </li>
        <li>
            <a href="">Export links to videos from a channel</a>
        </li>
        <li>
            <a href="">Export links to videos from playlists</a>
        </li>
    </ul>

    <h2 class="text-4xl font-thin text-gray-900 dark:text-white">Videos</h2>

    <div class="mt-2 p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
        No videos yet.
    </div>

@endsection
