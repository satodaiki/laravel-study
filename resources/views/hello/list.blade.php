<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>速習Laravel</title>
</head>
<body>

    
    @foreach ($records as $record)
    <h2>{{ $record->title }}</h2>
    <ul>
        <li>価格: {{ $record->price }}円</li>
        <li>出版社: {{ $record->publisher }}</li>
        <li>刊行日: {{ $record->published }}</li>
    </ul>
    @endforeach
    
</body>
</html>