@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
<form method="POST" action="/ctrl/uploadfile" enctype="multipart/form-data">
    @csrf
    <input id="upfile" name="upfile" type="file">
    <button type="submit">送信</button>
    <p>{{ $result }}</p>
</form>
@endsection