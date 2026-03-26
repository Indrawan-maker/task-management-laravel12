@extends('layouts.app')

@section('title', 'list catatan kamu!')


@section('content')
<div>
    <a href="{{ route('task.create') }}">buat tugas baru</a>
</div>
@forelse($tasks as $task)
<div>
    <a href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->judul }}</a>
</div>
<div>no : {{ $task->id }}</div>
<div>judul : {{ $task->judul }}</div>
<div>deksripsi : {{ $task->description }}</div>
@empty
<div>there is no tasks!</div>
@endforelse
@if ($task->count())
<div>
    {{ $tasks->links() }}
</div>
    
@endif
@endsection

