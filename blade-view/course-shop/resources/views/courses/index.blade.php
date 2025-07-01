@extends('layouts.layout')

@section('title', '所有課程')

@section('content')
    <h2>所有課程</h2>
    <ul>
        @foreach ($courses as $course)
        <li>
            <a href="/courses/{{ $course['id'] }}">{{ $course['title'] }}</a>
        </li>
        @endforeach
    </ul>
@endsection