<h1>課程清單</h1>

<ul>
    @foreach ($courses as $course)
        <li>
            <a href="{{ url('/courses/' . $course['id']) }}">
                {{ $course['title'] }}
            </a>
        </li>
    @endforeach
</ul>