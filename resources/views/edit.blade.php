@extends('layouts.app')

@section('title', 'edit catatan')


@section('styles')
<style>
    .error-message {
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')
<form method="POST" action="{{ route('task.edit', ['task' => $task->id]) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="judul">judul</label>
        <input type="text" name="judul" id="judul" value="{{ $task->judul }}">
        @error('judul')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="description">deskripsi</label>
        <textarea name="description" id="descripition" cols="30" rows="5">{{ $task->description }}</textarea>
        @error('description')
        <p class="error-mesage">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="long_description">deskriupsi panjang</label>
        <textarea name="long_description" id="long_description" cols="30" rows="10">{{ $task->long_description }}</textarea>
        @error('long_description')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <button type="submit">edit tugas</button>
    </div>
</form>
@endsection