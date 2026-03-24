@extends('layouts.app')

@section('title', 'buat tugas baru')

@section('content')

{{ $errors }}
<form method="POST" action="{{ route('task.store') }}">
    @csrf
    <div>
        <label for="judul">
            Title
        </label>
        <input type="text" name="judul" id="judu;">
    </div>

    <div>
        <label for="description">
            Description
        </label>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
    </div>

    <div>
        <label for="long_description">
            Long description
        </label>
        <textarea name="long_description" id="long_description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">submit</button>
    </div>
</form>
@endsection