<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = [
            ['id' => 1, 'title' => 'Laravel 入門課程'],
            ['id' => 2, 'title' => 'PHP 基礎教學'],
            ['id' => 3, 'title' => 'MySQL 快速攻略'],
        ];

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = ['id' => $id, 'title' => "課程 #$id 詳細介紹"];

        return view('courses.show', compact('course'));
    }
}
