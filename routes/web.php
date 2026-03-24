<?php
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Symfony\Component\HttpFoundation\Request;

// use Symfony\Component\HttpFoundation\Response;

Route::get('/', function() {
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index',[
        'tasks' => Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('task.create');

Route::get('/tasks/{task}', function(Task $task)  {
  return view('show', ['task' => $task]);
})->name('tasks.show');

Route::get('/tasks/{task}/edit', function(Task $task) {
  return view('edit' ,['task' => $task]);
})->name('tasks.edit');

Route::post('/tasks', function(Request $request) {
  $data = $request->validate([
    'judul' => 'required|max:255',
    'description' => 'required|max:555',
    'long_description' => 'required|max:555'
  ]);

  $task = new Task;
  $task->judul = $data['judul'];
  $task->description = $data['description'];
  $task->long_description = $data['long_description'];

  $task->save();
  return redirect()->route('tasks.show', ['task' => $task->id])
  ->with('success', 'Task created succesfully!');
})->name('tasks.store');

Route::put('/tasks/{task}', function(Task $task, Request $request) {
  $data = $request->validate([
    'judul' => 'required|max:255',
    'description' => 'required|max:555',
    'long_description' => 'required|max:555'
  ]);

  $task->judul  = $data['judul'];
  $task->description = $data['description'];
  $task->long_description = $data['long_description'];
  $task->save();
  return redirect()->route('tasks.show', ['task' => $task->id])
  ->with('success', 'task edit succesfully!');
})->name('task.edit');


// Route::get('/endpoint-rusak', function() {
//     return 'hello from enpoint hello and names as holla';
// })->name('holla');

// Route::get('/hallo', function() {
//     return redirect()->route('holla');
// });

// Route::get('user/{name}', function ($name) {
//  return 'user adalah ' . $name;
// });

// Route::fallback(function() {
//     return 'default error route not exist';
// });

