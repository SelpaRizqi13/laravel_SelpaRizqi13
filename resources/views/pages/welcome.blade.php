@extends('layouts.theme')

@push('plugin-styles')
@endpush

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h4 class="mb-1">
                            Form Rumah Sakit
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('pegawai') }}">
                    <div class="row">
                        <div class="col-md-6 col-ms-12">
                            <div class="row">
                                <div class="form-group">
                                    <p>Nama Rumah Sakit</p>
                                    <div class="col-md-12">
                                        <input type="text" name="nama_rumahsakit" value="{{ old('nama_rumahsakit') }}"
                                            class="form-control" id="nama_rumahsakit">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <p>Alamat</p>
                                    <div class="col-md-12">
                                        <textarea name="alamat_rumahsakit" id="alamat_rumahsakit" cols="50" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-12">
                            <div class="row">
                                <div class="form-group">
                                    <p>Email</p>
                                    <div class="col-md-12">
                                        <input type="email" name="email_rumahsakit" value="{{ old('email_rumahsakit') }}"
                                            class="form-control" id="email_rumahsakit">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group">
                                    <p>No Telpon</p>
                                    <div class="col-md-12">
                                        <input type="number" name="nomor_telp_rumahsakit"
                                            value="{{ old('nomor_telp_rumahsakit') }}" class="form-control"
                                            id="nomor_telp_rumahsakit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                        <a class="btn btn-success btn-lg" href="{{ url('pegawai') }}">
                            Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('add-js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush

@push('jquery')
    <script>
        $('.delete').click(function() {
            var userid = $(this).attr('data-id');
            swal({
                    title: "Yakin?",
                    text: "Apakah yakin akan menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete_pasien/" + userid + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>
@endpush
