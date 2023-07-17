@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Pelayanan</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user"></i> Pelayanan</h4>
                </div>

                <div class="card-body">
                    {{-- @can('pelayanans.create')
                        <div class="input-group-prepend">
                            <a href="{{ route('admin.pelayanan.create') }}" id="btnPelayanan" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                        </div>
                    @endcan --}}
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">PENERBITAN DOKUMEN KARTU KELUARGA</th>
                                <th scope="col">PENERBITAN KTP ELEKTRONIK</th>
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($pelayanans as $pelayanan)
                                <tr>
                                    <td>{{ $pelayanan->layanan_1 }}</td>
                                    <td>
                                        @if(Storage::disk('public')->exists($pelayanan->media_layanan_1 ?? null))
                                        <iframe src="{{ Storage::url($pelayanan->media_layanan_1 ?? null) }}" frameBorder="0" scrolling="auto" width="200px"></iframe>
                                        <!-- <img src="{{ Storage::url($media->media ?? null) }}" width="100px" alt="Media" /> -->
                                        @endif
                                    </td>
                                    <td class="text-center">

                                        @can('pelayanans.edit')
                                            <a href="{{ route('admin.pelayanan.edit', $pelayanan->id) }}" class="btn btn-sm btn-warning">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        @endcan
                                        <!-- @can('pelayanans.delete')
                                            <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $pelayanan->id }}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endcan -->
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="4">Empty</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    
</script>
@stop