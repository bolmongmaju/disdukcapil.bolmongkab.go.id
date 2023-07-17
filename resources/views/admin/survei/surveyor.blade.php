@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Surveyor</h1>
        </div>

        <div class="section-body">



            <div class="card">
                <div class="card-header">
                    <h4>Surveyor</h4>
                </div>
                <div class="card-body">

                    <div class="col-12">
                        <a class="btn btn-primary mb-2" style="color:aliceblue"
                            href="{{ route('admin.survei.index') }}">Lihat data average</a>
                        <div class="card">
                            <div class="card-header">
                                <h4>Data surveyor</h4>
                                <div class="card-header-action">
                                    <form action="{{ route('surveyor') }}" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="q" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="sortable-table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <i class="fas fa-th"></i>
                                                </th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No telepon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($surveis as $no => $item)
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td class="align-middle">{{ $item->telp }}</td>
                                                <td>               <a href="{{ route('survei-detail', $item->id) }}"><i
                                                    class="fa fa-eye btn btn-sm btn-primary"></i></a>
                                            @can('surveis.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger"
                                                id="{{ $item->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @endcan</td>

                                            </tr>
                                            @empty
                                            <tr>
                                                <td>Empty</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




{{-- 
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-bell"></i> Surveyor</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('surveyor') }}" method="GET">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="q" placeholder="cari berdasarkan nama">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> CARI
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-primary">
                                    <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NO. TELEPON</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($surveis as $no => $item)
                                <tr>
                                    <th scope="row" style="text-align: center">
                                        {{ ++$no + ($surveis->currentPage()-1) * $surveis->perPage() }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->alamat }}</td>

                                    <td class="text-center">
                                        <a href="{{ route('survei-detail', $item->id) }}"><i
                                                class="fa fa-eye btn btn-sm btn-primary"></i></a>
                                        @can('surveis.delete')
                                        <button onClick="Delete(this.id)" class="btn btn-sm btn-danger"
                                            id="{{ $item->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        @endcan
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5">Empty</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div style="text-align: center">
                            {{$surveis->links("vendor.pagination.bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </section>
</div>

<script>
    //ajax delete
    function Delete(id) {
        var id = id;
        var token = $("meta[name='csrf-token']").attr("content");

        swal({
            title: "APAKAH KAMU YAKIN ?",
            text: "INGIN MENGHAPUS DATA INI!",
            icon: "warning",
            buttons: [
                'TIDAK',
                'YA'
            ],
            dangerMode: true,
        }).then(function (isConfirm) {
            if (isConfirm) {

                //ajax delete
                jQuery.ajax({
                    url: "{{ route("admin.survei.index") }}/" + id,
                    data: {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            swal({
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                icon: 'success',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function () {
                                location.reload();
                            });
                        } else {
                            swal({
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                icon: 'error',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function () {
                                location.reload();
                            });
                        }
                    }
                });

            } else {
                return true;
            }
        })
    }

</script>
@stop
