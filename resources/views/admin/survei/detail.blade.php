@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Survei</h1>
        </div>
        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4>Detail</h4>
                </div>
                <div class="card-body">

                    <div class="col-12">
                        <a class="btn btn-primary mb-2" style="color:aliceblue"
                        href="{{ route('admin.survei.index') }}">Lihat data average</a>
                        <a class="btn btn-success mb-2" style="color:aliceblue"
                            href="{{ route('surveyor') }}">Kembali</a>
                        <div class="card">
                            <div class="card-header">
                                <h4>Surveyor :  </h4><h4 style="color: black">{{ $surveis->nama }}</h4>
                                <div class="card-header-action">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
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
                                                <th>Pelaksana pelayanan</th>
                                                <th>Kualitas pelaksana pelayanan</th>
                                                <th>Mekanisme pelayanan</th>
                                                <th>Jangka waktu</th>
                                                <th>Layanan pengaduan</th>
                                                <th>Sarana prasarana</th>
                                                <th>Jaminan keamanan</th>
                                                <th>Jaminan pelayanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="sort-handler">
                                                        <i class="fas fa-th"></i>
                                                    </div>
                                                </td>
                                                <td>{{$surveis->nama_pelaksana_pelayanan}}</td>
                                                <td>@if( $surveis->kualitas_pelaksana_pelayanan === 100)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->kualitas_pelaksana_pelayanan === 80)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->kualitas_pelaksana_pelayanan === 60)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->kualitas_pelaksana_pelayanan === 40)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->kualitas_pelaksana_pelayanan === 20)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                    </div>
                                                    @endif</td>

                                                <td class="align-middle">
                                                    @if( $surveis->mekanisme_pelayanan === 100)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->mekanisme_pelayanan === 80)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->mekanisme_pelayanan === 60)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->mekanisme_pelayanan === 40)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->mekanisme_pelayanan === 20)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                </td>

                                                <td>
                                                    @if( $surveis->jangka_waktu === 100)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jangka_waktu === 80)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jangka_waktu === 60)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jangka_waktu === 40)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jangka_waktu === 20)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                </td>

                                                <td>@if( $surveis->layanan_pengaduan === 100)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->layanan_pengaduan === 80)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->layanan_pengaduan === 60)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->layanan_pengaduan === 40)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->layanan_pengaduan === 20)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                    </div>
                                                    @endif</td>

                                                <td>@if( $surveis->sarana_prasarana === 100)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->sarana_prasarana === 80)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->sarana_prasarana === 60)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->sarana_prasarana === 40)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->sarana_prasarana === 20)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                    </div>
                                                    @endif</td>
                                                <td>@if( $surveis->jaminan_keamanan === 100)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_keamanan === 80)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_keamanan === 60)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_keamanan === 40)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_keamanan === 20)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                    </div>
                                                    @endif</td>

                                                <td>@if( $surveis->jaminan_pelayanan === 100)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_pelayanan === 80)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_pelayanan === 60)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_pelayanan === 40)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                        <p>☆</p>
                                                    </div>
                                                    @endif
                                                    @if( $surveis->jaminan_pelayanan === 20)
                                                    <div class="rating mt-3">
                                                        <p>☆</p>
                                                    </div>
                                                    @endif</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
