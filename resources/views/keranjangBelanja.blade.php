@extends('masterKeranjangBelanja')
@section('judulHalaman', 'Data Keranjang Belanja')


@section('konten')
	<h3>Data Keranjang Belanja</h3>

	<br/>
	<br/>

    <p>Cari Barang :</p>

    <form action="/keranjangbelanja/cari" method="GET">

        <div class="container form-group row">
            <input type="text" name="cari" placeholder="Masukkan Kode Barang .." value="{{ old('cari', isset($cari)? $cari : '') }}" class="form-control w-75 mr-2">

            <input type="submit" value="CARI" class="btn btn-info">
        </div>


    </form>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID}}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ 'Rp'.number_format($p->Harga, '0', ',', '.')}}</td>
            <td>{{'Rp'.number_format(($p->Jumlah)*($p->Harga), '0', ',', '.')}}</td>
            <td>
                <a href="/keranjangbelanja/tambahKeranjangBelanja" class="btn btn-primary py-1 px-3 mb-lg-0 mb-2 rounded-pill">Beli</a>
				<a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger d-lg-inline d-block rounded-pill">Hapus</a>
            </td>

		</tr>
		@endforeach
	</table>


    @endsection
