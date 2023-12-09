@extends('masterBlueray')
@section('judulHalaman', 'Edit Blueray')


@section('konten')

<h3>Edit Data Blueray</h3>
<a href="/blueray"> Kembali</a>
<br>
<br>

@foreach($blueray as $p)
<form action="/blueray/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="kodeblueray" value="{{ $p->kodeblueray }}">
    <div class="form-group row">
        <label for="merkblueray" class="col-lg-1 col-2 col-form-label mr-2">Merk</label>
        <div class="col-xs-9">
            <input type="text" required="required" name="merkblueray" value="{{ $p->merkblueray }}" class="form-control" id="merkblueray">
        </div>
    </div>
    <div class="form-group row">
        <label for="stockblueray" class="col-lg-1 col-2 col-form-label mr-2">Stock</label>
        <div class="col-xs-9">
            <input type="text" required="required" name="stockblueray" value="{{ $p->stockblueray }}" class="form-control" id="stockblueray">
        </div>
    </div>
    <div class="form-group row">
        <label for="tersedia" class="col-lg-1 col-2 col-form-label mr-2">Tersedia</label>
        <div class="col-xs-9">
            <input type="text" required="required" name="tersedia" value="{{ $p->tersedia }}" class="form-control" id="tersedia">
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary mt-2 rounded-pill">
</form>
@endforeach

@endsection
