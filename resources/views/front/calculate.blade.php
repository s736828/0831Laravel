<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <h2>計算機</h2>

        <div class="row">
            <div>Num1={{ $data['num1'] }}</div>
            <div>Num2={{ $data['num2'] }}</div>
        </div>
        @switch($data['option'])
            @case('+')
                @php
                    $result = $data['num1'] + $data['num2'];
                @endphp
            @break

            @case('-')
                @php
                    $result = $data['num1'] - $data['num2'];
                @endphp
            @break

            @case('*')
                @php
                    $result = $data['num1'] * $data['num2'];
                @endphp
            @break

            @case('/')
                @php
                    $result = $data['num1'] / $data['num2'];
                @endphp
            @break

            @default
                Defalut case...
        @endswitch

        <div class="row">
            <div class="col">
                {{ $data['num1'] }}{{ $data['option'] }}{{ $data['num2'] }}={{ $result }}
            </div>
        </div>
    </div>
</body>

</html>
