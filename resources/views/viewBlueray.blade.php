@extends('masterBlueray')
@section('judulHalaman', 'Lihat Blueray')


@section('konten')

@foreach($blueray as $p)

    <div class="row">
        <div class="col-6 border border-dark" style="height: 100vh">

        </div>
        <div class="col-6">
            <div class="container" style="font-size: 120%;">
                <div class="row mb-3">
                    <div class="col-lg-3 col-5" style="font-weight: bold;">
                        Kode Blueray
                    </div>
                    <div class="col-md-7">
                        : {{ $p->kodeblueray }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3 col-5" style="font-weight: bold;">
                        Merk
                    </div>
                    <div class="col-md-7">
                        : {{ $p->merkblueray }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3 col-5" style="font-weight: bold;">
                        Stock
                    </div>
                    <div class="col-md-7">
                        : {{ $p->stockblueray }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-3 col-5" style="font-weight: bold;">
                        Tersedia
                    </div>
                    <div class="col-md-7">
                        : {{ $p->tersedia }}
                    </div>
                </div>
                <div class="row">
                    <a href="/blueray" class="btn btn-primary py-1 px-3 ml-3">OK</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection
