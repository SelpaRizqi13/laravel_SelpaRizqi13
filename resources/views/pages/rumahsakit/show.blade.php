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
                            <a class="btn btn-success btn-sm mb-4" href="{{ url('/profilrumahsakit') }}">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        <div class="">
                            <span class="text-bold">Nama Rumah Sakit : </span>
                            <p for="">{{ $profilrumahsakit->nama_rumahsakit }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Email Rumah Sakit: </span>
                            <p for="">{{ $profilrumahsakit->email_rumahsakit }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">No Telpon Rumah Sakit: </span>
                            <p for="">{{ $profilrumahsakit->nomor_telp_rumahsakit }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Alamat Rumah Sakit : </span>
                            <p for="">{{ $profilrumahsakit->alamat_rumahsakit }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
