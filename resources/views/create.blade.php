@extends('layouts.app')

@section('title', 'buat tugas baru')

@section('styles')
<style>
    .error-message {
        color: red;
        font-size: 0, 8rem;
    }
</style>
@endsection

@section('content')

<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div>
        <label for="judul">
            Title
        </label>
        <input type="text" name="judul" id="judul">
        @error('judul')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="description">
            Description
        </label>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
        @error('description')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="long_description">
            Long description
        </label>
        <textarea name="long_description" id="long_description" cols="30" rows="10"></textarea>
        @error('long_description')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>
@endsection