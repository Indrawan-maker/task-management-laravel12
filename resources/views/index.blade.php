@extends('layouts.app')

@section('title', 'list catatan kamu!')


@section('content')
@forelse($tasks as $task)
<div>
    <a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
</div>
<div>no : {{ $task->id }}</div>
<div>judul : {{ $task->title }}</div>
<div>deksripsi : {{ $task->description }}</div>
@empty
<div>there is no tasks!</div>
@endforelse
@endsection

