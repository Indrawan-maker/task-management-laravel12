<h1>List tugas anda
<h1/>
<br>


<div>
    {{-- @if(count($tasks) > 0)  --}}
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
     {{-- @else 
        tidak ada tugas
    
    @endif --}}
</div>

