<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $task->title }}" required>
        <br>
        <label>Description:</label>
        <textarea name="description">{{ $task->description }}</textarea>
        <br>
        <label>Completed:</label>
        <input type="checkbox" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
        <br>
        <button type="submit">Update Task</button>
    </form>
</body>
</html>
