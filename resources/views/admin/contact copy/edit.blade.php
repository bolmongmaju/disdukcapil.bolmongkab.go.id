@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Faq</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-phone"></i> Edit Faq</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.faq.update', $faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label>PERTANYAAN</label>
                            <textarea class="form-control @error('question') is-invalid @enderror" name="question"
                                placeholder="Masukkan Pertanyaan" rows="10">{!! old('question') ?? $faq->question !!}</textarea>
                            @error('question')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>JAWABAN</label>
                            <textarea class="form-control @error('answer') is-invalid @enderror" name="answer"
                                placeholder="Masukkan Jawaban" rows="10">{!! old('answer') ?? $faq->answer !!}</textarea>
                            @error('answer')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            UPDATE</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
