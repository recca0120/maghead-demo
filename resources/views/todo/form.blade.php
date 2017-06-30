<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            padding-top: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if (isset($todo->id) === false)
            <form method="POST" action="{{ route('todo.store') }}">
            {{ method_field('POST') }}
        @else
            <form method="POST" action="{{ route('todo.update', $todo->id) }}">
            {{ method_field('PUT') }}
        @endif
        {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="control-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $todo->title }}" />
            </div>

            <div class="form-group">
                <label for="done" class="control-label">Done</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="done" value="1" {{ $todo->done ? 'checked' :  '' }} />
                    </label>
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="submit" />
        </form>
    </div>
</body>
</html>
