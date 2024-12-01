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
                            Form Daftar Pasien
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('pasien') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-ms-12">
                            <div class="row">
                                <div class="form-group">
                                    <p>Nama Pasien</p>
                                    <div class="col-md-12">
                                        <input type="text" name="nama_pasien" value="{{ old('nama_pasien') }}"
                                            class="form-control" id="nama_pasien">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <p>Alamat</p>
                                    <div class="col-md-12">
                                        <textarea name="alamat_pasien" id="alamat_pasien" cols="50" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-12">
                            <div class="row">
                                <div class="form-group">
                                    <p>No Telpon</p>
                                    <div class="col-md-12">
                                        <input type="number" name="no_telp_pasien" value="{{ old('no_telp_pasien') }}"
                                            class="form-control" id="no_telp_pasien">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group">
                                    <p>Rumah Sakit</p>
                                    <div class="col-md-12">
                                        <select id="profilrumahsakit_id" name="profilrumahsakit_id"
                                            class="form-select select2">
                                            <option value="">Pilih Rumah Sakit</option>
                                            @foreach ($profilrumahsakit as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_rumahsakit }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                        <a class="btn btn-success btn-lg" href="{{ url('pasien') }}">
                            Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('add-js')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();

            $('#profilrumahsakit_id').select2({
                placeholder: "Pilih Rumah Sakit",
                allowClear: true
            });
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
