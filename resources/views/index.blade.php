<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5">
        <div class="form-group">
            <a href="{{ route('dojob') }}" class="btn btn-primary">Dispatch job</a>
        </div>
        <table class="table table-stripped">
            <thead>
                <th>#</th>
                <th>name</th>
                <th>dob</th>
                <th>citizen</th>
                <th>action</th>
            </thead>
            <tbody>
                @foreach ($players as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->citizen }}</td>
                        <td>
                            <a href="#">Edit | Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $players->links() }}
    </div>
</body>
</html>