<?php

namespace App\Http\Controllers\Admin;

use App\Models\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use File;

class FacilityController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:facilities.index|facilities.create|facilities.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::latest()->when(request()->q, function ($facilities) {
            $facilities = $facilities->where('caption', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.facility.index', compact('facilities'));
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
            'caption' => 'required',
            'image'   => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/facility-images', $image->hashName());

        $facility = Facility::create([
            'image'   => $image->hashName(),
            'caption' => $request->input('caption'),
        ]);

        if ($facility) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.facility.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.facility.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);
        // unlink('public/photo-images/' . $photo->image);
        Storage::disk('local')->delete('public/facility-images/' . $facility->image);
        $facility->delete();

        if ($facility) {
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
