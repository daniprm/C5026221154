@extends('master')

@section('judulHalaman', 'Kontak')
@section('judul')
<div class="jumbotron">

    <h3>Ini Adalah Halaman Kontak</h3>
</div>
@endsection

@section('konten')
<table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      @for ($i = 1; $i<=10; $i++)
      <tr>
        <td>Budi @php
            echo $i
        @endphp</td>
        <td>Dibu @php
            echo $i
        @endphp</td>
        <td>Budi @php
            echo $i
        @endphp@example.com</td>
      </tr>
      @endfor
    </tbody>
  </table>
@endsection
