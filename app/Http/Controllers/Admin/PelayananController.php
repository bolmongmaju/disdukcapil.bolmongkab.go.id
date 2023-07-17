<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelayananController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:pelayanans.index|pelayanans.create|pelayanans.edit']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelayanans = Pelayanan::latest()->when(request()->q, function ($pelayanans) {
            $pelayanans = $pelayanans->where('nama_pelayanan', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.pelayanan.index', compact('pelayanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelayanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'layanan_1'    => 'required',
        //     'media_layanan_1'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_2'    => 'required',
        //     'media_layanan_2'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_3'    => 'required',
        //     'media_layanan_3'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_4'    => 'required',
        //     'media_layanan_4'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_5'    => 'required',
        //     'media_layanan_5'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_6'    => 'required',
        //     'media_layanan_6'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_7'    => 'required',
        //     'media_layanan_7'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_8'    => 'required',
        //     'media_layanan_8'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_9'    => 'required',
        //     'media_layanan_9'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        //     'layanan_10'    => 'required',
        //     'media_layanan_10'          => 'required|mimes:jpeg,jpg,png,pdf,docx|max:10000',

        // ]);

        if ($request->file('media_layanan_1')) {
            $media_layanan_1 = $request->file('media_layanan_1')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_2')) {
            $media_layanan_2 = $request->file('media_layanan_2')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_3')) {
            $media_layanan_3 = $request->file('media_layanan_3')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_4')) {
            $media_layanan_4 = $request->file('media_layanan_4')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_5')) {
            $media_layanan_5 = $request->file('media_layanan_5')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_6')) {
            $media_layanan_6 = $request->file('media_layanan_6')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_7')) {
            $media_layanan_7 = $request->file('media_layanan_7')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_8')) {
            $media_layanan_8 = $request->file('media_layanan_8')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_9')) {
            $media_layanan_9 = $request->file('media_layanan_9')->store('assets/media', 'public');
        }

        $pelayanan = Pelayanan::create([
            'layanan_1'            => $request->input('layanan_1'),
            'media_layanan_1'                => ($request->file('media_layanan_1')) ? $media_layanan_1 : null,
            'layanan_2'            => $request->input('layanan_2'),
            'media_layanan_2'                => ($request->file('media_layanan_2')) ? $media_layanan_2 : null,
            'layanan_3'            => $request->input('layanan_3'),
            'media_layanan_3'                => ($request->file('media_layanan_3')) ? $media_layanan_3 : null,
            'layanan_4'            => $request->input('layanan_4'),
            'media_layanan_4'                => ($request->file('media_layanan_4')) ? $media_layanan_4 : null,
            'layanan_5'            => $request->input('layanan_5'),
            'media_layanan_5'                => ($request->file('media_layanan_5')) ? $media_layanan_5 : null,
            'layanan_6'            => $request->input('layanan_6'),
            'media_layanan_6'                => ($request->file('media_layanan_6')) ? $media_layanan_6 : null,
            'layanan_7'            => $request->input('layanan_7'),
            'media_layanan_7'                => ($request->file('media_layanan_7')) ? $media_layanan_7 : null,
            'layanan_8'            => $request->input('layanan_8'),
            'media_layanan_8'                => ($request->file('media_layanan_8')) ? $media_layanan_8 : null,
            'layanan_9'            => $request->input('layanan_9'),
            'media_layanan_9'                => ($request->file('media_layanan_9')) ? $media_layanan_9 : null,
        ]);

        if ($pelayanan) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.pelayanan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.pelayanan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelayanan $pelayanan)
    {
        return view('admin.pelayanan.edit', compact('pelayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelayanan $pelayanan)
    {
        $this->validate($request, [
            // 'nama_pelayanan'          => 'required',
            // 'keterangan'    => 'required',
            // 'media'          => 'image|mimes:jpeg,jpg,png,pdf,docx|max:10000',
        ]);

        if ($request->file('media_layanan_1')) {
            Storage::delete($pelayanan->media_layanan_1);
            $media_layanan_1 = $request->file('media_layanan_1')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_2')) {
            Storage::delete($pelayanan->media_layanan_2);
            $media_layanan_2 = $request->file('media_layanan_2')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_3')) {
            Storage::delete($pelayanan->media_layanan_3);
            $media_layanan_3 = $request->file('media_layanan_3')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_4')) {
            Storage::delete($pelayanan->media_layanan_4);
            $media_layanan_4 = $request->file('media_layanan_4')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_5')) {
            Storage::delete($pelayanan->media_layanan_5);
            $media_layanan_5 = $request->file('media_layanan_5')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_6')) {
            Storage::delete($pelayanan->media_layanan_6);
            $media_layanan_6 = $request->file('media_layanan_6')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_7')) {
            Storage::delete($pelayanan->media_layanan_7);
            $media_layanan_7 = $request->file('media_layanan_7')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_8')) {
            Storage::delete($pelayanan->media_layanan_8);
            $media_layanan_8 = $request->file('media_layanan_8')->store('assets/media', 'public');
        }
        if ($request->file('media_layanan_9')) {
            Storage::delete($pelayanan->media_layanan_9);
            $media_layanan_9 = $request->file('media_layanan_9')->store('assets/media', 'public');
        }

        $pelayanan->findOrFail($pelayanan->id)->update([
            'layanan_1'          => $request->input('layanan_1'),
            'media_layanan_1'                => ($request->file('media_layanan_1')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_2'          => $request->input('layanan_2'),
            'media_layanan_2'                => ($request->file('media_layanan_2')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_3'          => $request->input('layanan_3'),
            'media_layanan_3'                => ($request->file('media_layanan_3')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_4'          => $request->input('layanan_4'),
            'media_layanan_4'                => ($request->file('media_layanan_4')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_5'          => $request->input('layanan_5'),
            'media_layanan_5'                => ($request->file('media_layanan_5')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_6'          => $request->input('layanan_6'),
            'media_layanan_6'                => ($request->file('media_layanan_6')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_7'          => $request->input('layanan_7'),
            'media_layanan_7'                => ($request->file('media_layanan_7')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_8'          => $request->input('layanan_8'),
            'media_layanan_8'                => ($request->file('media_layanan_8')) ? $media_layanan_1 : $pelayanan->media_layanan_1,
            'layanan_9'          => $request->input('layanan_9'),
            'media_layanan_9'                => ($request->file('media_layanan_9')) ? $media_layanan_1 : $pelayanan->media_layanan_1,

        ]);

        if ($pelayanan) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.pelayanan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.pelayanan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
