<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach($member as $key => $value)
        <li>{{ $key }}：{{ $value }}</li>
    @endforeach
    </ul>
</body>
</html>