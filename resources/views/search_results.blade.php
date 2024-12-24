@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Hasil Pencarian untuk: "{{ $keyword }}"</h2>
        
        <!-- Jika ada hasil pencarian, tampilkan di sini -->
        {{-- @if($results->count() > 0)
            <ul>
                @foreach($results as $result)
                    <li>{{ $result->nama_kolom }}</li>
                @endforeach
            </ul>
        @else
            <p>Tidak ada hasil yang ditemukan.</p>
        @endif --}}
        
        <!-- Jika belum ada logika pencarian, tampilkan placeholder -->
        <p>Fungsi pencarian belum terimplementasi.</p>
    </div>
@endsection
