@extends('masterLatihanEAS')
@section('judulHalaman', 'Tambah Nilai Kuliah')


@section('konten')

	<h3>Data Nilai</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/storeNilai" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-lg-1 col-2 col-form-label mr-2">NRP</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-lg-1 col-2 col-form-label mr-2">SKS</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-lg-1 col-2 col-form-label mr-2">Nilai Angka</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary mt-2 rounded-pill">
	</form>

    @endsection
