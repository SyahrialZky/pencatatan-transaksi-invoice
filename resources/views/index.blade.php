@extends('layouts.app')

@section('title', 'index page')

@section('content')
    <h1>Halo seelamat datang {{ auth()->user()->name }}</h1>
@endsection