<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>速習Laravel</title>
</head>
<body>

    @foreach ($records as $index => $record)
        {{-- @continue($loop->odd) --}}
        {{-- @break($loop->iteration > 4) --}}
        <h2>No.{{ $index + 1 }} {{ $record->title }}</h2>
        <ul>
            <li>価格: {{ $record->price }}円</li>
            <li>出版社: {{ $record->publisher }}</li>
            <li>刊行日: {{ $record->published }}</li>
            <li>$loop->index : {{ $loop->index }}</li>
            <li>$loop->iteration : {{ $loop->iteration }}</li>
            <li>$loop->remaining : {{ $loop->remaining }}</li>
            <li>$loop->count : {{ $loop->count }}</li>
            <li>$loop->first : {{ $loop->first }}</li>
            <li>$loop->last : {{ $loop->last }}</li>
            <li>$loop->even : {{ $loop->even }}</li>
            <li>$loop->odd : {{ $loop->odd }}</li>
            <li>$loop->depth : {{ $loop->depth }}</li>
            <li>$loop->parent : {{ $loop->parent }}</li>
            {{-- <li>{{ $record->price_avg }}</li> --}}
        </ul>
    @endforeach
</body>
</html>