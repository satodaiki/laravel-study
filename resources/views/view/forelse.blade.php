<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @forelse($list as $item)
        <li>{{ $item }}</li>
    @empty
        <li>データは存在しません。</li>
    @endforelse
    </ul>
</body>
</html>