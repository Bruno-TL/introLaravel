{{--Pegando o layout do app --}}
@extends('layouts/app')

{{--Mudando o title que está la no layout do app para 'Language'--}}
@section('title', 'Language')

{{--O que estar  dentro da section irá usar o layout do app--}}
@section('content')
    <h1>Teste</h1>
@endsection
