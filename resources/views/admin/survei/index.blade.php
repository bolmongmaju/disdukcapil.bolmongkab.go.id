@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Survei</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-bell"></i> Data Survei</h4>
                </div>
                <div class="card-body">

                    <div class="card">
                        <div class="card-header">
                            <h4>Data Average</h4>
                        </div>
                        <div class="card-body">

                            @if($mekanisme_pelayanan != null)
                            {{-- @forelse($surveis as $item) --}}
                            <div class="mb-2">
                                <div class="font-weight-bold mb-1">Mekanisme Pelayanan</div>

                                @if( $mekanisme_pelayanan >= 80.000)
                                <div class="rating">
                                    <p>☆</p>
                                    <p>☆</p>
                                    <p>☆</p>
                                    <p>☆</p>
                                    <p>☆</p>
                                </div>
                                @endif
                                @if( $mekanisme_pelayanan >= 60.000 && $mekanisme_pelayanan <= 79.000 ) <div
                                    class="rating">
                                    <p>☆</p>
                                    <p>☆</p>
                                    <p>☆</p>
                                    <p>☆</p>
                            </div>
                            @endif
                            @if( $mekanisme_pelayanan >= 40.000 && $mekanisme_pelayanan <= 59.000 ) <div class="rating">
                                <p>☆</p>
                                <p>☆</p>
                                <p>☆</p>
                        </div>
                        @endif
                        @if( $mekanisme_pelayanan >= 20.000 && $mekanisme_pelayanan <= 39.000 ) <div class="rating">
                            <p>☆</p>
                            <p>☆</p>
                    </div>
                    @endif
                    @if( $mekanisme_pelayanan >= 0.000 && $mekanisme_pelayanan <= 19.000 ) <div class="rating">
                        <p>☆</p>
                </div>
                @endif

            </div>

            <div class="mb-2">
                <div class="font-weight-bold mb-1">Jangka Waktu</div>

                @if( $jangka_waktu >= 80.000)
                <div class="rating">
                    <p>☆</p>
                    <p>☆</p>
                    <p>☆</p>
                    <p>☆</p>
                    <p>☆</p>
                </div>
                @endif
                @if( $jangka_waktu >= 60.000 && $jangka_waktu <= 79.000 ) <div
                    class="rating">
                    <p>☆</p>
                    <p>☆</p>
                    <p>☆</p>
                    <p>☆</p>
            </div>
            @endif
            @if( $jangka_waktu >= 40.000 && $jangka_waktu <= 59.000 ) <div class="rating">
                <p>☆</p>
                <p>☆</p>
                <p>☆</p>
        </div>
        @endif
        @if( $jangka_waktu >= 20.000 && $jangka_waktu <= 39.000 ) <div class="rating">
            <p>☆</p>
            <p>☆</p>
    </div>
    @endif
    @if( $jangka_waktu >= 0.000 && $jangka_waktu <= 19.000 ) <div class="rating">
        <p>☆</p>
</div>
@endif

</div>

<div class="mb-2">
    <div class="font-weight-bold mb-1">Layanan Pengaduan</div>

    @if( $layanan_pengaduan >= 80.000)
    <div class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
    </div>
    @endif
    @if( $layanan_pengaduan >= 60.000 && $layanan_pengaduan <= 79.000 ) <div
        class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
</div>
@endif
@if( $layanan_pengaduan >= 40.000 && $layanan_pengaduan <= 59.000 ) <div class="rating">
    <p>☆</p>
    <p>☆</p>
    <p>☆</p>
</div>
@endif
@if( $layanan_pengaduan >= 20.000 && $layanan_pengaduan <= 39.000 ) <div class="rating">
<p>☆</p>
<p>☆</p>
</div>
@endif
@if( $layanan_pengaduan >= 0.000 && $layanan_pengaduan <= 19.000 ) <div class="rating">
<p>☆</p>
</div>
@endif

</div>




<div class="mb-2">
    <div class="font-weight-bold mb-1">sarana_prasarana</div>

    @if( $sarana_prasarana >= 80.000)
    <div class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
    </div>
    @endif
    @if( $sarana_prasarana >= 60.000 && $sarana_prasarana <= 79.000 ) <div
        class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
</div>
@endif
@if( $sarana_prasarana >= 40.000 && $sarana_prasarana <= 59.000 ) <div class="rating">
    <p>☆</p>
    <p>☆</p>
    <p>☆</p>
</div>
@endif
@if( $sarana_prasarana >= 20.000 && $sarana_prasarana <= 39.000 ) <div class="rating">
<p>☆</p>
<p>☆</p>
</div>
@endif
@if( $sarana_prasarana >= 0.000 && $sarana_prasarana <= 19.000 ) <div class="rating">
<p>☆</p>
</div>
@endif

</div>





<div class="mb-2">
    <div class="font-weight-bold mb-1">Kualitas Pelaksana Pelayanan</div>

    @if( $kualitas_pelaksana_pelayanan >= 80.000)
    <div class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
    </div>
    @endif
    @if( $kualitas_pelaksana_pelayanan >= 60.000 && $kualitas_pelaksana_pelayanan <= 79.000 ) <div
        class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
</div>
@endif
@if( $kualitas_pelaksana_pelayanan >= 40.000 && $kualitas_pelaksana_pelayanan <= 59.000 ) <div class="rating">
    <p>☆</p>
    <p>☆</p>
    <p>☆</p>
</div>
@endif
@if( $kualitas_pelaksana_pelayanan >= 20.000 && $kualitas_pelaksana_pelayanan <= 39.000 ) <div class="rating">
<p>☆</p>
<p>☆</p>
</div>
@endif
@if( $kualitas_pelaksana_pelayanan >= 0.000 && $kualitas_pelaksana_pelayanan <= 19.000 ) <div class="rating">
<p>☆</p>
</div>
@endif

</div>



<div class="mb-2">
    <div class="font-weight-bold mb-1">Jaminan Keamanan</div>

    @if( $jaminan_keamanan >= 80.000)
    <div class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
    </div>
    @endif
    @if( $jaminan_keamanan >= 60.000 && $jaminan_keamanan <= 79.000 ) <div
        class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
</div>
@endif
@if( $jaminan_keamanan >= 40.000 && $jaminan_keamanan <= 59.000 ) <div class="rating">
    <p>☆</p>
    <p>☆</p>
    <p>☆</p>
</div>
@endif
@if( $jaminan_keamanan >= 20.000 && $jaminan_keamanan <= 39.000 ) <div class="rating">
<p>☆</p>
<p>☆</p>
</div>
@endif
@if( $jaminan_keamanan >= 0.000 && $jaminan_keamanan <= 19.000 ) <div class="rating">
<p>☆</p>
</div>
@endif

</div>




<div class="mb-2">
    <div class="font-weight-bold mb-1">Jaminan Pelayanan</div>

    @if( $jaminan_pelayanan >= 80.000)
    <div class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
    </div>
    @endif
    @if( $jaminan_pelayanan >= 60.000 && $jaminan_pelayanan <= 79.000 ) <div
        class="rating">
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
        <p>☆</p>
</div>
@endif
@if( $jaminan_pelayanan >= 40.000 && $jaminan_pelayanan <= 59.000 ) <div class="rating">
    <p>☆</p>
    <p>☆</p>
    <p>☆</p>
</div>
@endif
@if( $jaminan_pelayanan >= 20.000 && $jaminan_pelayanan <= 39.000 ) <div class="rating">
<p>☆</p>
<p>☆</p>
</div>
@endif
@if( $jaminan_pelayanan >= 0.000 && $jaminan_pelayanan <= 19.000 ) <div class="rating">
<p>☆</p>
</div>
@endif

</div>


<div class="text-small float-left font-weight-bold text-muted"><a class="btn btn-primary" href="{{ route('surveyor') }}">Surveyor</a>
    @else
    <li class="media">
        <div class="media-body">
            <div class="media-title mb-1">Belum ada surveyor!</div>
        </div>
    </li>
    @endif

</div>


        </div>
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
