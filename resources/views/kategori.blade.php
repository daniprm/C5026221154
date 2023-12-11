@extends('masterKategori')
@section('judulHalaman', 'Pilih Kategori')


@section('konten')
	<h3>Pilih Kategori</h3>
	<br/>

    <form action="/kategori/view" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="pilihKategori">Example select</label>
            <select class="form-control" id="pilihKategori" name="pilihKategori">
                @foreach ($kategori as $p)
                    <option value="{{$p->ID}}">{{$p->Nama}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary mt-2">

    </form>

	{{-- <table class="table table-striped table-hover">
		<tr>
			<th>Kode kategori</th>
			<th>Merk kategori</th>
			<th>Stock kategori</th>
			<th>Tersedia</th>
            <th>Action</th>

		</tr>
		@foreach($kategori as $p)
		<tr>
			<td>{{ $p->kodekategori}}</td>
			<td>{{ $p->merkkategori }}</td>
			<td>{{ $p->stockkategori }}</td>
			<td>{{ $p->tersedia }}</td>
            <td>
				<a href="/kategori/view/{{ $p->kodekategori }}" class="btn btn-success d-lg-inline d-block">View</a>
                <span class="d-lg-inline d-none">|</span>
				<a href="/kategori/edit/{{ $p->kodekategori }}" class="btn btn-warning d-lg-inline d-block my-2">Edit</a>
				<span class="d-lg-inline d-none">|</span>
				<a href="/kategori/hapus/{{ $p->kodekategori }}" class="btn btn-danger d-lg-inline d-block">Hapus</a>
            </td>

		</tr>
		@endforeach
	</table> --}}
    @endsection
