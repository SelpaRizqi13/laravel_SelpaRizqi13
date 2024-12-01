@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-4 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Rumah Sakit
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <a class="btn btn-success btn-sm mb-4" href="{{ url('/pasien') }}">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        <div class="">
                            <span class="text-bold">Nama Pasien : </span>
                            <p for="">{{ $pasien->nama_pasien }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">No Telpon Pasien: </span>
                            <p for="">{{ $pasien->no_telp_pasien }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Alamat Pasien : </span>
                            <p for="">{{ $pasien->alamat_pasien }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Rumah Sakit : </span>
                            <p for="">{{ $pasien->rumahsakit->nama_rumahsakit }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
