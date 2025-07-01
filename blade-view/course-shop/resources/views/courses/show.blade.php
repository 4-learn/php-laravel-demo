@extends('layouts.layout')

@section('title', $course['title'])

@section('content')
    <h2>{{ $course['title'] }}</h2>
    <p>{{ $course['description'] }}</p>

    @if ($course['is_available'])
        <button>立即購買</button>
    @else
        <p>目前尚未開放購買</p>
    @endif
@endsection
