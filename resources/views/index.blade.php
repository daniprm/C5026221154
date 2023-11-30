@extends('master2')
@section('judulHalaman', 'Data Pegawai')


@section('konten')
    <h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary border border-rounded py-1 px-3 rounded-pill"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <p>Cari Nama Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari', isset($cari)? $cari : '') }}" class="form-control w-75">
        <input type="submit" value="CARI" class="btn btn-info mt-1 mb-5">
    </form>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td class="text-center">
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger d-md-inline d-block mt-3">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <span class="d-flex justify-content-center">{{$pegawai -> links()}}</span>

    @endsection
