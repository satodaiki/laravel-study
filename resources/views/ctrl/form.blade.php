@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
<form method="POST" action="/ctrl/result">
    @csrf
    <label for="name">名前: </label>
    <input id="name" name="name" type="text" value="">
    <button type="submit">送信</button>
    <p>{{ $result }}</p>
</form>
@endsection