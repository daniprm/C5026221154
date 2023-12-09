@extends('masterKeranjangBelanja')
@section('judulHalaman', 'Tambah Keranjang Belanja')


@section('konten')

	<h3>Data Nilai</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-lg-1 col-2 col-form-label mr-2">Kode Barang</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-lg-1 col-2 col-form-label mr-2">Jumlah</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-lg-1 col-2 col-form-label mr-2">Harga</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Harga" name="Harga">
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary mt-2 rounded-pill">
	</form>

    @endsection
