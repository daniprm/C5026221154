@extends('masterBlueray')
@section('judulHalaman', 'Tambah Blueray')


@section('konten')

	<h3>Data Nilai</h3>

	<a href="/blueray"> Kembali</a>

	<br/>
	<br/>

	<form action="/blueray/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkblueray" class="col-lg-1 col-2 col-form-label mr-2">Merk</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="merkblueray" name="merkblueray">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockblueray" class="col-lg-1 col-2 col-form-label mr-2">Stock</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="stockblueray" name="stockblueray">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-lg-1 col-2 col-form-label mr-2">Tersedia</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary mt-2 rounded-pill">
	</form>

    @endsection
