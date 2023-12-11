@extends('masterKategori')
@section('judulHalaman', 'Lihat kategori')


@section('konten')
@foreach($kategori as $p)
    <h2>Anda telah memilih Kategori dengan kode: {{$p->ID}}</h2>
@endforeach

@endsection
