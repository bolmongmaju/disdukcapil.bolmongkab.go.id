@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Pelayanan</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user"></i> Tambah Pelayanan</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.pelayanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>PENERBITAN DOKUMEN KARTU KELUARGA</label>
                            <textarea name="layanan_1" value="{{ old('layanan_1') }}"
                                placeholder="Masukkan Keterangan"
                                class="form-control content @error('layanan_1') is-invalid @enderror"></textarea>

                            @error('layanan_1')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN KTP ELEKTRONIK</label>
                            <textarea name="layanan_2" value="{{ old('layanan_2') }}"
                                placeholder="Masukkan Keterangan"
                                class="form-control content @error('layanan_2') is-invalid @enderror"></textarea>

                            @error('layanan_2')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN KARTU IDENTITAS ANAK (KIA)</label>
                            <textarea name="layanan_3" value="{{ old('layanan_3') }}"
                                placeholder="Masukkan Keterangan"
                                class="form-control content @error('layanan_3') is-invalid @enderror"></textarea>

                            @error('layanan_3')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN DOKUMEN SURAT KETERANGAN PINDAH WNI</label>
                            <textarea name="layanan_4" value="{{ old('layanan_4') }}"
                                placeholder="Masukkan Keterangan"
                                class="form-control content @error('layanan_4') is-invalid @enderror"></textarea>

                            @error('layanan_4')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN AKTA KELAHIRAN</label>
                            <textarea name="layanan_5" value="{{ old('layanan_5') }}"
                                placeholder="Masukkan Keterangan"
                                class="form-control content @error('layanan_5') is-invalid @enderror"></textarea>

                            @error('layanan_5')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN AKTA PENGAKUAN ANAK</label>
                            <textarea name="layanan_6" value="{{ old('layanan_6') }}"
                            placeholder="Masukkan Keterangan"
                            class="form-control content @error('layanan_6') is-invalid @enderror"></textarea>

                            @error('layanan_6')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN AKTA PENGESAHAN ANAK</label>
                            <textarea name="layanan_7" value="{{ old('layanan_7') }}"
                                placeholder="Masukkan Keterangan"
                                class="form-control content @error('layanan_7') is-invalid @enderror"></textarea>

                            @error('layanan_7')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN AKTA KEMATIAN</label>
                            <textarea name="layanan_8" value="{{ old('layanan_8') }}"
                                placeholder="Masukkan Keterangan"
                                class="form-control content @error('layanan_8') is-invalid @enderror"></textarea>

                            @error('layanan_8')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <div class="form-group">
                            <label>PENERBITAN AKTA PERKAWINAN</label>
                            <textarea name="layanan_9" value="{{ old('layanan_9') }}"
                            placeholder="Masukkan Keterangan"
                            class="form-control content @error('layanan_9') is-invalid @enderror"></textarea>

                            @error('layanan_9')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Batas -->

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
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
