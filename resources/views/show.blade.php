@extends('layouts.app')

@section('title', $task->judul)

@section('content')
<h2>{{ $task->description }}</h2>

@if($task->long_description) 
    <p>{{ $task->long_description }}</p>

@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

<p>
    status tugas : 
    @if ($task->completed)
        Selesai!
        @else
        Belum selesai
    @endif
</p>

<div>
    <a href="{{ route('tasks.edit', ['task' => $task]) }}">edit</a>
</div>

<div>
    <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
        @csrf
        @method('PUT')
        <button type="submit">
            tandai tugas sebagai {{ $task->completed ? 'belum selesai' : 'sudah selesai' }}
        </button>
    </form>
</div>

<form method="POST" action="{{ route('tasks.destroy', ['task' => $task]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">hapus</button>
</form>
@endsection