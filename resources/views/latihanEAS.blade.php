@extends('masterLatihanEAS')
@section('judulHalaman', 'Data Nilai Kuliah')


@section('konten')
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambahNilaiKuliah" class="btn btn-primary border border-rounded py-1 px-3 rounded-pill"> + Tambah Nilai Baru</a>

	<br/>
	<br/>

    <p>Cari NRP :</p>

    <form action="/nilaikuliah/cari" method="GET">

        <div class="container form-group row">
            <input type="text" name="cari" placeholder="Cari NRP .." value="{{ old('cari', isset($cari)? $cari : '') }}" class="form-control w-75 mr-2">

            <input type="submit" value="CARI" class="btn btn-info">
        </div>


    </form>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID}}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            @if($p->NilaiAngka <= 40)
                <td>D</td>
            @elseif($p->NilaiAngka <= 60 && $p->NilaiAngka >= 41)
                <td>C</td>

            @elseif($p->NilaiAngka <= 80 && $p->NilaiAngka >= 61)
                <td>B</td>

            @else
                <td>A</td>

            @endif
            <td>{{($p->NilaiAngka)*($p->SKS)}}</td>

		</tr>
		@endforeach
	</table>


    @endsection
