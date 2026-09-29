<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>example-laravel on UQBITZ</title>
</head>
<body data-uqbitz-marker="{{ $marker }}">
    <h1>Laravel {{ app()->version() }} on UQBITZ</h1>
    <p>Database driver: <strong id="driver">{{ $driver }}</strong></p>
    <ul id="marks">
        @foreach ($marks as $mark)
            <li>{{ $mark->label }} ({{ $mark->created_at }})</li>
        @endforeach
    </ul>
</body>
</html>
