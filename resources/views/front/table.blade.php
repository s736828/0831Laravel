<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @php
        // dd($data1);
    @endphp

    <div class="container mt-3">
        <h2>Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="col">#</th>
                    <th class="col">Name</th>
                    <th class="col">Mobile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data1 as $item)
                    <tr>
                        <th scope="row">{{ $item['id'] }}</th>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['mobile'] }}</td>
                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>

</body>

</html>
