<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container mt-3">
        <h2>XXX大飯店</h2>
        @php
            // dd($data123)
        @endphp

        <a href="{{ route('helloF1') }}" class="btn btn-primary">F1 自助餐{{ $data123['s1'] }}</a>
        <a href="{{ route('helloF2') }}" class="btn btn-success">F2 中式料理</a>
        <a href="{{ route('helloF3') }}" class="btn btn-danger">F3 西式料理</a>
        {{-- <a href="/f1" class="btn btn-success">F1 自助餐</a>
        {{-- <a href="/f2" class="btn btn-primary">F2 中式料理</a> --}}
        {{-- <a href="/f3" class="btn btn-warning">F3 西式料理</a> --}}
    </div>
    <div class="container">
        <img src="{{ asset('images/3.png') }}" width="300px">
    </div>
</body>
</html>

