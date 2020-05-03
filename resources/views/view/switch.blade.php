<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @switch($random)
        @case(5)
            <p>大ラッキーの一日です！</p>
            @break
        @case(4)
            <p>4</p>
            @break
        @case(3)
            <p>3</p>
            @break
        @case(2)
            <p>2</p>
            @break
        @default
            <p>default</p>
    @endswitch
</body>
</html>