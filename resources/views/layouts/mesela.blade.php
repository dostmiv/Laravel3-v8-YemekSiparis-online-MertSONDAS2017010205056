@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')
    @parent

    <p>sub page data</p>

@endsection

@section('content')
    <p>This is my body content.</p>

    aaaaa<br>
    bbbbb<br>

@endsection
