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
        <a href="{{ route('todo.create') }}" class="btn btn-success">Create</a>

        <table class="table">
            <thead>
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        Done
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td>
                            {{ $todo->title }}
                        </td>
                        <td>
                            {{ $todo->done ? 'Y' : 'N' }}
                        </td>
                        <td>
                            <a href="{{ route('todo.edit', $todo->id) }}">Edit</a>
                            <form method="POST" action="{{ route('todo.destroy', $todo->id) }}" style="cursor: pointer; display: inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <a onclick="this.parentNode.submit();">Remove</a>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
