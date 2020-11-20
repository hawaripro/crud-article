@extends('layouts.app')
@section('content')
{{-- percobaan slug(yang mengikuti sesuai dengan link) --}}
<h1>{{ $article->title }}</h1>
<p>
    {{ $article->subject }}
</p>
<a href="/artikell" class="btn btn-sm btn-info"> << </a>
@endsection
