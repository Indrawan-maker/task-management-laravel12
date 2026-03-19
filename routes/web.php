<?php
use Illuminate\Support\Facades\Route;


class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];


Route::get('/', function () use ($tasks) {
    return view('index',[
        'tasks' => $tasks
    ]);
})->name('task.index');

Route::get('/{id}', function($id) {
    return "task with id : $id";
})->name('task.show');

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

