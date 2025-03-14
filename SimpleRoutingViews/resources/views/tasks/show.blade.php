<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Status: {{ $task->is_completed ? 'Completed' : 'Pending' }}</p>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>
</html>
