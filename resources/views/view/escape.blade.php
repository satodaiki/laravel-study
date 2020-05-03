<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {!! $msg !!}
    
    {{ $msg }}
    
    <p>@{{ $msg }}</p>

    @verbatim
    <p>{{ $msg }}</p>
    @endverbatim

    {{-- これはコメントです --}}
</body>
</html>