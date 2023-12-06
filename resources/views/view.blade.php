    @extends('master2')
    @section('judulHalaman', 'Lihat Pegawai')


    @section('konten')

	@foreach($pegawai as $p)

        <div class="row">
            <div class="col-6 border border-dark" style="height: 100vh">

            </div>
            <div class="col-6">
                <div class="container" style="font-size: 150%; font-weight: bold;">
                    <div class="row mb-3">
                        <div class="col-lg-3 col-5">
                            Nama
                        </div>
                        <div class="col-7">
                            : {{ $p->pegawai_nama }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-5">
                            Jabatan
                        </div>
                        <div class="col-7">
                            : {{ $p->pegawai_jabatan }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-5">
                            Umur
                        </div>
                        <div class="col-7">
                            : {{ $p->pegawai_umur }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-3 col-5">
                            Alamat
                        </div>
                        <div class="col-7">
                            : {{ $p->pegawai_alamat }}
                        </div>
                    </div>
                    <div class="row">
                        <a href="/pegawai" class="btn btn-primary py-2 px-4">OK</a>
                    </div>
                </div>
            </div>
        </div>
	@endforeach

    @endsection
