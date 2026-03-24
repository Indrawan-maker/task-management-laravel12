@extends('layouts.app')

@section('title', $task->judul)

@section('content')
<h2>{{ $task->description }}</h2>

@if($task->long_description) 
    <p>{{ $task->long_description }}</p>

@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>
@endsection