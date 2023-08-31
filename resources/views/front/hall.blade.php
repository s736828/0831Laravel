<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-3">
        <h2>XXX大飯店</h2>
        @php
            // dd($data)
        @endphp

        <a href="{{ route('aaa') }}" class="btn btn-primary">F1 自助餐{{ $data123['s1'] }}</a>
        <a href="{{ route('bbb') }}" class="btn btn-success">F2 中式料理</a>
        <a href="{{ route('abc') }}" class="btn btn-danger">F3 西式料理</a>

        <a href="/f3" class="btn btn-danger">F3</a>
    </div>
    <div class="container">
        <img src="{{ asset('images/3.png') }}" width="300px">
    </div>
</body>

</html>
<script>
    setInterval(() => {
        window.location.replace('/calculate');
    }, 5000);
</script>
