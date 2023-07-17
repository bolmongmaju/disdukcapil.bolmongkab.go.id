@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Pelayanan</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user"></i> Edit Pelayanan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.pelayanan.update', $pelayanan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>PELAYANAN PEMBUATAN SURAT TIDAK SILANG SENGKETA</label>
                                <textarea class="form-control content @error('layanan_1') is-invalid @enderror" name="layanan_1"
                                placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_1') ?? $pelayanan->layanan_1 !!}</textarea>

                            @error('layanan_1')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN PEMBUATAN SURAT KETERANGAN TANAH YANG BARU</label>
                            <textarea class="form-control content @error('layanan_2') is-invalid @enderror" name="layanan_2"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_2') ?? $pelayanan->layanan_2 !!}</textarea>

                            @error('layanan_2')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN PEMBUATAN SURAT KETERANGAN TANAH YANG HILANG</label>
                            <textarea class="form-control content @error('layanan_3') is-invalid @enderror" name="layanan_3"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_3') ?? $pelayanan->layanan_3 !!}</textarea>

                            @error('layanan_3')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN PEMBUATAN SURAT PELEPASAN GANTI RUGI</label>
                            <textarea class="form-control content @error('layanan_4') is-invalid @enderror" name="layanan_4"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_4') ?? $pelayanan->layanan_4 !!}</textarea>

                            @error('layanan_4')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN REKOMENDASI IJIN MENDIRIKAN BANGUNAN</label>
                            <textarea class="form-control content @error('layanan_5') is-invalid @enderror" name="layanan_5"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_5') ?? $pelayanan->layanan_5 !!}</textarea>

                            @error('layanan_5')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN SURAT KETERANGAN PEMBANGUNAN TOWER</label>
                            <textarea class="form-control content @error('layanan_6') is-invalid @enderror" name="layanan_6"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_6') ?? $pelayanan->layanan_6 !!}</textarea>

                            @error('layanan_6')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN SURAT KETERANGAN AHLI WARIS</label>
                            <textarea class="form-control content @error('layanan_7') is-invalid @enderror" name="layanan_7"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_7') ?? $pelayanan->layanan_7 !!}</textarea>

                            @error('layanan_7')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN PENGURUSAN SURAT DISPENSASI NIKAH</label>
                            <textarea class="form-control content @error('layanan_8') is-invalid @enderror" name="layanan_8"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_8') ?? $pelayanan->layanan_8 !!}</textarea>

                            @error('layanan_8')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PELAYANAN SURAT KETERANGAN TIDAK MAMPU</label>
                            <textarea class="form-control content @error('layanan_9') is-invalid @enderror" name="layanan_9"
                            placeholder="Masukkan Keterangan" rows="10">{!! old('layanan_9') ?? $pelayanan->layanan_9 !!}</textarea>

                            @error('layanan_9')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            UPDATE</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
<script>
    var editor_config = {
        selector: "textarea.content",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        forced_root_block : false,
    };

    tinymce.init(editor_config);

</script>
@stop
