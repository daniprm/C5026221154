@extends('masterBlueray')
@section('judulHalaman', 'Data Blueray')


@section('konten')
	<h3>Data Blueray</h3>
    <a href="/blueray/tambah" class="btn btn-primary py-1 px-3 rounded-pill">+ Tambah Blueray</a>

	<br/>
	<br/>

    <p>Cari Blueray :</p>

    <form action="/blueray/cari" method="GET">

        <div class="container form-group row">
            <input type="text" name="cari" placeholder="Masukkan Merk Blueray .." value="{{ old('cari', isset($cari)? $cari : '') }}" class="form-control w-75 mr-2">

            <input type="submit" value="CARI" class="btn btn-info">
        </div>


    </form>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Blueray</th>
			<th>Merk Blueray</th>
			<th>Stock Blueray</th>
			<th>Tersedia</th>
            <th>Action</th>

		</tr>
		@foreach($blueray as $p)
		<tr>
			<td>{{ $p->kodeblueray}}</td>
			<td>{{ $p->merkblueray }}</td>
			<td>{{ $p->stockblueray }}</td>
			<td>{{ $p->tersedia }}</td>
            <td>
				<a href="/blueray/view/{{ $p->kodeblueray }}" class="btn btn-success d-lg-inline d-block">View</a>
                <span class="d-lg-inline d-none">|</span>
				<a href="/blueray/edit/{{ $p->kodeblueray }}" class="btn btn-warning d-lg-inline d-block my-2">Edit</a>
				<span class="d-lg-inline d-none">|</span>
				<a href="/blueray/hapus/{{ $p->kodeblueray }}" class="btn btn-danger d-lg-inline d-block">Hapus</a>
            </td>

		</tr>
		@endforeach
	</table>

    <span class="d-flex justify-content-center">{{$blueray -> links()}}</span>



    @endsection
