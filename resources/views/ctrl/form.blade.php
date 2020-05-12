@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
<form method="POST" action="/ctrl/result">
    @csrf
    @if(session('alert'))
    <div class="alert">{{ session('alert') }}</div>
    @endif
    <label for="name">名前: </label>
    <input id="name" name="name" type="text" value="{{ old('name', '') }}">
    <button type="submit">送信</button>
    <p>{{ $result }}</p>
</form>
@endsection