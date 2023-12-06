@extends('master2')
@section('judulHalaman', 'Tambah Pegawai')


@section('konten')

<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-lg-1 col-2 col-form-label mr-2">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-lg-1 col-2 col-form-label mr-2">Jabatan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-lg-1 col-2 col-form-label mr-2">Umur</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-lg-1 col-2 col-form-label mr-2">Alamat</label>
            <div class="col-xs-9">
                <textarea name="alamat" class="form-control" cols="22"></textarea>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary mt-2 rounded-pill">
	</form>

    @endsection
