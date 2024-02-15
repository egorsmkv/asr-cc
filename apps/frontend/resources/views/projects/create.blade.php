@extends('layouts.app')

@section('content')

    <h1 class="text-4xl font-thin text-gray-900 dark:text-white">Create a new project</h1>

    <form action="{{ route('projects.save') }}" method="post">

        @csrf

        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title')
                <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Save
            </button>
        </div>

    </form>

@endsection
