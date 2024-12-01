@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Pasien
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            @if (Session::has('success'))
                <p class="alert alert-success mt-4 mx-3">{{ Session::get('success') }}</p>
            @endif


            <div class="table-responsive mx-4 mb-5 mt-4">
                <div class="row">
                    <div class="col-4">
                        <a class="btn btn-success" href="{{ url('pasien/create') }}"><i class="fa fa-plus"></i>
                            Tambah
                            Data</a>
                    </div>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                            <th>Rumah Sakit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pasien as $key => $value)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $value->nama_pasien }}</td>
                                <td>{{ $value->no_telp_pasien }}</td>
                                <td>{{ $value->alamat_pasien }}</td>
                                <td>{{ $value->alamat_pasien }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info" href="{{ url('pasien/' . $value->id) }}">View
                                    </a>
                                    <a class="btn btn-success" href="{{ url('pasien/' . $value->id . '/edit') }}">
                                        Update
                                    </a>
                                    <a class="btn btn-danger delete" data-id="{{ $value->id }}" type="submit"> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach

                    </tbody>
                </table>

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
            var pasien_id = $(this).attr('data-id');
            swal({
                    title: "Yakin?",
                    text: "Apakah yakin akan menghapus data ini?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "/delete_pasien/" + pasien_id,
                            type: "DELETE",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            success: function(response) {
                                swal("Data berhasil dihapus", {
                                    icon: "success",
                                }).then(() => {
                                    location.reload();
                                });
                            },
                            error: function(xhr) {
                                swal("Terjadi kesalahan", "Data gagal dihapus", "error");
                            }
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>
@endpush
