<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#f6f6f6;
    margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    @foreach($data as $item)
    <li>{{$item}}
    @endforeach
    <form method="POST" action="/hello">
        {{ csrf_field() }}
        <input type="text" name="msg">
        <input type="submit">
    </form>
    <ol>
        @for ($i=1; $i<20; $i++)
            @if ($i % 2 == 1)
                @continue
            @elseif ($i <= 10)
            <li>NO, {{$i}}
            @else
                @break
            @endif
        @endfor
    </ol>
</body>
</html>