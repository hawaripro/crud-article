@extends('layouts.app')
@section('content')
    <h1>Alhamdulillahi Rabbil 'Alamin</h1>
    <br>
    {{-- Penampilan index judul dan isi --}}
    @foreach ($articles as $artikel)
    <div class="card" mb-1>
        <div class="card-body">
            <p><strong>{{ ucfirst($artikel->title) }}</strong></p>
            <p>{{ $artikel->subject }}</p>
            <a href="/artikell/{{ $artikel->title }}" class="btn btn-secondary btn-sm">Baca</a>
            <a href="/artikell/{{ $artikel->id }}/edit" class="btn btn-secondary btn-sm">Edit</a>
            <form action="/artikell/{{ $artikel->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger"> Hapus</button>
            </form>
        </div>
    </div>
    @endforeach
    {{-- Penghubungan laravel dengan database --}}
    <div>
        {{ $articles-> Links() }}
    </div>
@endsection
