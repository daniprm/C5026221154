@extends('masterLatihanEAS')
@section('judulHalaman', 'Tambah Nilai Kuliah')


@section('konten')

@foreach($nilaikuliah as $p)
<form action="/nilaikuliah/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->ID }}">
    <div class="form-group row">
        <label for="ID" class="col-lg-1 col-2 col-form-label mr-2">ID</label>
        <div class="col-xs-9">
            <input type="text" required="required" name="ID" value="{{ $p->nilaikuliah_ID }}" class="form-control" id="ID">
        </div>
    </div>
    <div class="form-group row">
        <label for="jabatan" class="col-lg-1 col-2 col-form-label mr-2">Jabatan</label>
        <div class="col-xs-9">
            <input type="text" required="required" name="jabatan" value="{{ $p->nilaikuliah_jabatan }}" class="form-control" id="jabatan">
        </div>
    </div>
    <div class="form-group row">
        <label for="umur" class="col-lg-1 col-2 col-form-label mr-2">Umur</label>
        <div class="col-xs-9">
            <input type="number" required="required" name="umur" value="{{ $p->nilaikuliah_umur }}" class="form-control" id="umur">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-lg-1 col-2 col-form-label mr-2">Alamat</label>
        <div class="col-xs-9">
            <textarea required="required" name="alamat" class="form-control" cols="22">{{ $p->nilaikuliah_alamat }}</textarea>
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary mt-2 rounded-pill">
</form>
@endforeach

@endsection
