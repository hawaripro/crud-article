@extends('layouts.app')
@section('content')
<h1>Create new article : </h1>
{{-- form for create new artikel --}}
<form action="/artikell/" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Judul ya bro</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="subject">Subjectnya ya</label>
        <textarea class="form-control" id="subject" name="subject" rows="3">{{ old('subject') }}</textarea>
        @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-secondary">Sambit</button>
</form>
@endsection
