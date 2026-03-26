@extends('layouts.app')

@section('title', $task->judul)

@section('content')
<h2>{{ $task->description }}</h2>

@if($task->long_description) 
    <p>{{ $task->long_description }}</p>

@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

<div>
    <a href="{{ route('tasks.edit', ['task' => $task]) }}">edit</a>
</div>

<form method="POST" action="{{ route('tasks.destroy', ['task' => $task]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">hapus</button>
</form>
@endsection