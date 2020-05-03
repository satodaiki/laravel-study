<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @isset($msg)
    <p>変数msgは「{{ $msg }}」です。</p>
    @endisset

    @empty($msg1)
    <p>変数msg1にメッセージはありません。</p>
    @endempty
</body>
</html>