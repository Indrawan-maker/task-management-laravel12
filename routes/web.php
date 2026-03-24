<?php
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Symfony\Component\HttpFoundation\Request;

// use Symfony\Component\HttpFoundation\Response;

Route::get('/', function() {
  return redirect()->route('task.index');
});

Route::get('/tasks', function () {
    return view('index',[
        'tasks' => Task::latest()->get()
    ]);
})->name('task.index');

Route::view('/tasks/create', 'create')->name('task.create');

Route::get('/tasks/{id}', function($id)  {
  return view('show', ['task' => Task::findOrFail($id)]);
})->name('task.show');

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
  return redirect()->route('task.show', ['id' => $task->id]);
})->name('task.store');


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

