@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Faq</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-phone"></i> Faq</h4>
                </div>

                <div class="card-body">
                    @can('contact.create')
                        <div class="input-group-prepend">
                            <a href="{{ route('admin.faq.create') }}" class="btn btn-primary" style="padding-top: 10px;"><i class="fa fa-plus-circle"></i> TAMBAH</a>
                        </div>
                    @endcan

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">PERTANYAAN</th>
                                <th scope="col">JAWABAN</th>
                                <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($faqs as $faq)
                                <tr>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ $faq->answer }}</td>
                                    <td class="text-center">

                                    @can('faqs.edit')
                                        <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                    @endcan

                                    @can('faqs.delete')
                                    <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $faq->id }}">
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
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    
</script>
@stop