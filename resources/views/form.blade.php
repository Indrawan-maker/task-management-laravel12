@extends('layouts.app')

@section('title', isset($task) ? 'edit tugas' : 'buat tugas')


@section('styles')
<style>
    .error-message {
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')

<form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task]) : route('tasks.store') }}">
    @csrf
    @isset($task)
    @method('PUT')
    @endisset
    <div>
        <label for="judul">
            Title
        </label>
        <input type="text" name="judul" id="judul" value="{{ $task->judul ?? old('judul') }}">
        @error('judul')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">
            Description
        </label>
        <textarea name="description" id="description" cols="30" rows="5">{{ $task->description ?? old('description') }}</textarea>
        @error('description')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="long_description">
            Long description
        </label>
        <textarea name="long_description" id="long_description" cols="30" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
        @error('long_description')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit">
            @isset($task)
            submit edit
            @else 
            add task
            @endisset
        </button>
    </div>
</form>
@endsection