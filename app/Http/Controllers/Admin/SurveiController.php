<?php

namespace App\Http\Controllers\Admin;

use App\Models\Survei;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurveiController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['permission:Lapors.index|Lapors.delete']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mekanisme_pelayanan = Survei::avg('mekanisme_pelayanan');

        $mekanisme_pelayanan = Survei::avg('mekanisme_pelayanan');
        $jangka_waktu = Survei::avg('jangka_waktu');
        $layanan_pengaduan = Survei::avg('layanan_pengaduan');
        $sarana_prasarana = Survei::avg('sarana_prasarana');
        $kualitas_pelaksana_pelayanan = Survei::avg('kualitas_pelaksana_pelayanan');
        $jaminan_keamanan = Survei::avg('jaminan_keamanan');
        $jaminan_pelayanan = Survei::avg('jaminan_pelayanan');
        
        // $surveis = Survei::latest()->when(request()->q, function ($surveis) {
        //     $surveis = $surveis->where('title', 'like', '%' . request()->q . '%');
        // })->paginate(10);
        // dd($mekanisme_pelayanan)

        return view('admin.survei.index', compact('mekanisme_pelayanan','jangka_waktu','layanan_pengaduan','sarana_prasarana','kualitas_pelaksana_pelayanan','jaminan_keamanan','jaminan_pelayanan'));
    }

    public function surveyor()
    {
        $surveis = Survei::latest()->when(request()->q, function ($surveis) {
            $surveis = $surveis->where('nama', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.survei.surveyor', compact('surveis'));
    }

    public function detail(Survei $surveis)
    {
        return view('admin.survei.detail', compact('surveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.event.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'title'    => 'required|unique:events,title',
    //         'hari'     => 'required',
    //         'time'     => 'required',
    //         'location' => 'required',
    //         'date'     => 'required',
    //         'image'    => 'image|mimes:jpeg,jpg,png|max:2048',
    //     ]);

    //     if ($request->file('image')) {
    //         $image = $request->file('image')->store('assets/event', 'public');
    //     }

    //     $event = Event::create([
    //         'title'    => $request->input('title'),
    //         'slug'     => strtolower(Str::slug($request->input('title') . '-' . time())),
    //         'content'  => $request->input('content'),
    //         'location' => $request->input('location'),
    //         'date'     => $request->input('date'),
    //         'hari'     => $request->input('hari'),
    //         'time'     => $request->input('time'),
    //         'image'    => ($request->file('image')) ? $image : null,
    //         'status'   => 'Y',
    //     ]);

    //     if ($event) {
    //         //redirect dengan pesan sukses
    //         return redirect()->route('admin.event.index')->with(['success' => 'Data Berhasil Disimpan!']);
    //     } else {
    //         //redirect dengan pesan error
    //         return redirect()->route('admin.event.index')->with(['error' => 'Data Gagal Disimpan!']);
    //     }
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Event $event)
    // {
    //     $events = [
    //         'minggu', 'senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu'
    //     ];
    //     return view('admin.event.edit', compact('event', 'events'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Event $event)
    // {
    //     $this->validate($request, [
    //         'title'    => 'required|unique:events,title,' . $event->id,
    //         'hari'     => 'required',
    //         'time'     => 'required',
    //         'location' => 'required',
    //         'date'     => 'required',
    //         'image'    => 'image|mimes:jpeg,jpg,png|max:2048',
    //     ]);

    //     if ($request->file('image')) {
    //         $image = $request->file('image')->store('assets/event', 'public');
    //     }

    //     $event = Event::findOrFail($event->id);
    //     $event->update([
    //         'title'    => $request->input('title'),
    //         'slug'     => strtolower(Str::slug($request->input('title') . '-' . time())),
    //         'content'  => $request->input('content'),
    //         'location' => $request->input('location'),
    //         'date'     => $request->input('date'),
    //         'hari'     => $request->input('hari'),
    //         'time'     => $request->input('time'),
    //         'image'    => ($request->file('image')) ? $image : $event->image
    //     ]);

    //     if ($event) {
    //         //redirect dengan pesan sukses
    //         return redirect()->route('admin.event.index')->with(['success' => 'Data Berhasil Diupdate!']);
    //     } else {
    //         //redirect dengan pesan error
    //         return redirect()->route('admin.event.index')->with(['error' => 'Data Gagal Diupdate!']);
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $survei = Survei::findOrFail($id);
        $survei->delete();

        if ($survei) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
