@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Keluhan</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4>Laporan</h4>
                </div>
                <div class="card-body">
                    @forelse ($lapors as $no => $item)

                    <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                        <li class="media rounded" style="background-color: aliceblue; padding: 1%">
                            {{-- <img alt="image" class="mr-3 rounded-circle" width="70" src="../assets/img/avatar/avatar-1.png"> --}}
                            <div class="media-body">
                                <div class="media-right">
                                    <div class="text-primary">
                                        <div class="media-links">
                                            {{-- <a href="#">View</a>
                            <div class="bullet"></div>
                            <a href="#">Edit</a>
                            <div class="bullet"></div> --}}
                                            <a onClick="Delete(this.id)" id="{{ $item->id }}" style="color: aliceblue"
                                                class="btn btn-sm btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-title mb-1">{{ $item->nama }}</div>
                                <div class="text-time">{{ $item->telp }}</div>
                                <div class="media-description text-muted">{{ $item->keluhan }}</div>



                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="sortable-table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        <i class="fas fa-th"></i>
                                                    </th>
                                                    <th>Nama operator pelayanan</th>
                                                    <th>Nilai operator</th>
                                                    <th>Nilai pelayanan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="sort-handler">
                                                            <i class="fas fa-th"></i>
                                                        </div>
                                                    </td>
                                                    <td>{{$item->nama_operator}}</td>
                                                    <td>@if( $item->nilai_operator === 100)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 80)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 60)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 40)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 20)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                        </div>
                                                        @endif</td>
    
                                                    <td class="align-middle">
                                                        @if( $item->nilai_pelayanan === 100)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 80)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 60)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 40)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 20)
                                                        <div class="rating mt-3">
                                                            <p>☆</p>
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>




                                {{-- <div class="card-body">
                                    <div class="table-responsive" style="margin-left: -25px;">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="table-primary">
                                                    <th scope="col">NAMA OPERATOR</th>
                                                    <th scope="col">NILAI OPERATOR</th>
                                                    <th scope="col">NILAI PELAYANAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p style="font-size: 18px; margin-top: 35px;">
                                                            {{ $item->nama_operator }}</p>
                                                    </td>
                                                    <td> @if( $item->nilai_operator === 100)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 80)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 60)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 40)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_operator === 20)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif</td>
                                                    <td> @if( $item->nilai_pelayanan === 100)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 80)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 60)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 40)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if( $item->nilai_pelayanan === 20)
                                                        <div class="" data-height="3">
                                                            <div class="rating">
                                                                <p>☆</p>
                                                            </div>
                                                        </div>
                                                        @endif</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div style="text-align: center">
                                            {{$lapors->links("vendor.pagination.bootstrap-4")}}
                                        </div>
                                    </div>

                                    <div class="media-links text-success" style="margin-left: -25px; margin-top: 30px;">
                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}
                                    </div>
                                </div> --}}
                        </li>
                        @empty
                        <li class="media">
                            <div class="media-body">
                                <div class="media-title mb-1">Belum ada laporan!</div>
                            </div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

</div>

</section>
</div>

<script>
    document.getElementById("myRadio").disabled = true;

</script>
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
                    url: "{{ route("admin.lapor.index") }}/" + id,
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
