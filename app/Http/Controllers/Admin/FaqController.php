<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:faqs.index|faqs.create|faqs.edit']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::latest()->when(request()->q, function ($faqs) {
            $faqs = $faqs->where('question', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question'          => 'required',
            'answer'    => 'required',
        ]);

        $faq = Faq::create([
            'question'                => $request->input('question'),
            'answer'                => $request->input('answer'),
        ]);

        if ($faq) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.faq.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.faq.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        $this->validate($request, [
            'question'          => 'required',
            'answer'    => 'required',
        ]);

        $faq->findOrFail($faq->id)->update([
            'question'            => $request->input('question'),
            'answer'          => $request->input('answer'),
        ]);

        if ($faq) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.faq.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.faq.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
