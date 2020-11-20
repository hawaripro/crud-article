@extends('layouts.app')
{{-- agar halaman ini muncul pada layouts app blade --}}
@section('content')
<h1>Edit Artikel : </h1>
{{-- form for create new artikel --}}
<form action="/artikell/{{ $article->id }}" method="POST">
    {{-- akses yang harus dengan token --}}
    @csrf
    {{-- from route web for database --}}
    @method('PUT')
    <div class="form-group">
        <label for="title">Judul ya bro</label>
        <input type="text" class="form-control" id="title" name="title" 
        {{-- funsinya agar tulisan lamanya keliatan --}}
            value="{{ old('title') ? old('title') : $article->title }}">
            {{-- error message where the title tidak ada --}}
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="subject">Subjectnya ya</label>
        <textarea class="form-control" id="subject" name="subject" rows="3">{{ old('subject') ? old('subject') : $article->subject }}</textarea>
        @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-secondary">Sambit</button>
</form>
@endsection
