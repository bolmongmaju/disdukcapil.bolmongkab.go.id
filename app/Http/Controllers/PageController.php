<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use App\Models\Event;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Category;
use App\Models\Download;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Infografis;
use App\Models\Lapor;
use App\Models\Link;
use App\Models\News;
use App\Models\Photo;
use App\Models\Facility;
use App\Models\Potensi;
use App\Models\Profile;
use App\Models\Profpeg;
use App\Models\Sosmed;
use App\Models\Survei;
use App\Models\Video;
use App\Models\Pelayanan;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        $postssatu = News::with('tags')->take(1)->latest()->get();
        // $eventposts = Category::where('name', 'event')->latest()->get();
        $eventposts = News::where('category_id', '3')->take(1)->get();
        // $umumposts = Category::where('name', 'umum')->latest()->get();
        $latestposts = News::with('tags')->take(6)->latest()->get();
        $posts = News::with('tags')->inRandomOrder()->get();
        $events = Event::take(4)->latest()->get();
        $sliders = Slider::take(3)->latest()->get();
        $links = Link::latest()->get();
        $services = Service::latest()->get();
        $contact = Contact::find(1);
        $sosmeds = Sosmed::get();
        $pimpinans = Profile::take(1)->latest()->get();
        $umumposts = News::where('category_id', '1')->take(4)->get();
        $tags = Tag::latest()->get();
        $prestasiposts = News::where('category_id', '4')->take(2)->get();
        $faqs = Faq::take(5)->latest()->get();
        $facilities = Facility::take(6)->latest()->get();
        $profil = Profile::select('nama_opd', 'short_name', 'kata_sambutan', 'foto_pimpinan', 'logo', 'favicon', 'maklumat')->find(1);

        // $infografis = Http::get('https://bolmongkab.go.id/api/infografis')['data']['data'];

        return view('opd.index', compact(
            'posts',
            'latestposts',
            'events',
            'sliders',
            'services',
            'postssatu',
            // 'infografis',
            'links',
            'contact',
            'sosmeds',
            'profil',
            'eventposts',
            'umumposts',
            'pimpinans',
            'tags',
            'prestasiposts',
            'faqs',
            'facilities'
        ));
    }

    public function storeLapor(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'telp'  => 'required',
            'nama_operator'  => 'required',
            'keluhan'  => 'required',
            'nilai_pelayanan'  => 'required',
            'nilai_operator'  => 'required',
        ]);

        $lapor = Lapor::create([
            'nama'  => $request->input('nama'),
            'telp'  => $request->input('telp'),
            'nama_operator'  => $request->input('nama_operator'),
            'keluhan'  => $request->input('keluhan'),
            'nilai_pelayanan'  => $request->input('nilai_pelayanan'),
            'nilai_operator'  => $request->input('nilai_operator'),
        ]);

        if ($lapor) {
            //redirect dengan pesan sukses
            return redirect()->route('lapor-disdukcapil')->with(['success' => 'Laporan Berhasil Dikirm!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('lapor-disdukcapil')->with(['error' => 'Laporan Gagal Dikirim!']);
        }
    }

    public function storeSurvei(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'telp'  => 'required',
            'alamat'  => 'required',
            'mekanisme_pelayanan'  => 'required',
            'jangka_waktu'  => 'required',
            'layanan_pengaduan'  => 'required',
            'sarana_prasarana'  => 'required',
            'kualitas_pelaksana_pelayanan'  => 'required',
            'nama_pelaksana_pelayanan'  => 'required',
            'jaminan_keamanan'  => 'required',
            'jaminan_pelayanan'  => 'required',
        ]);

        $survei = Survei::create([
            'nama'  => $request->input('nama'),
            'telp'  => $request->input('telp'),
            'alamat'  => $request->input('alamat'),
            'mekanisme_pelayanan'   => $request->input('mekanisme_pelayanan'),
            'jangka_waktu'  => $request->input('jangka_waktu'),
            'layanan_pengaduan'  => $request->input('layanan_pengaduan'),
            'sarana_prasarana'  => $request->input('sarana_prasarana'),
            'kualitas_pelaksana_pelayanan'  => $request->input('kualitas_pelaksana_pelayanan'),
            'nama_pelaksana_pelayanan'  => $request->input('nama_pelaksana_pelayanan'),
            'jaminan_keamanan'  => $request->input('jaminan_keamanan'),
            'jaminan_pelayanan'  => $request->input('jaminan_pelayanan'),
        ]);

        if ($survei) {
            //redirect dengan pesan sukses
            return redirect()->route('survei-capil')->with(['success' => 'Survei Berhasil Dikirm!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('survei-capil')->with(['error' => 'Survei Gagal Dikirim!']);
        }
    }

    public function layanan1()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-1', compact('pelayanan'));
    }
    public function layanan2()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-2', compact('pelayanan'));
    }
    public function layanan3()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-3', compact('pelayanan'));
    }
    public function layanan4()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-4', compact('pelayanan'));
    }
    public function layanan5()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-5', compact('pelayanan'));
    }
    public function layanan6()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-6', compact('pelayanan'));
    }
    public function layanan7()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-7', compact('pelayanan'));
    }
    public function layanan8()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-8', compact('pelayanan'));
    }
    public function layanan9()
    {
        // $pelayanan = Pelayanan::where('nama_pelayanan', 'Pembuatan Surat Tidak Silang Sengketa (Service Delivery)')->latest()->get();
        $pelayanan = Pelayanan::take(1)->latest()->get();
        return view('opd/detail/layanan-9', compact('pelayanan'));
    } 

    public function lapordisdukcapil()
    {
        // $tupoksi = Profile::take(1)->latest()->get();
        return view('opd/detail/lapordisdukcapil');
    }

    public function surveicapil()
    {
        // $tupoksi = Profile::take(1)->latest()->get();
        return view('opd/detail/surveicapil');
    }

    public function program()
    {
        $program = Profile::take(1)->latest()->get();
        return view('opd/detail/program', compact('program'));
    }

    public function facility()
    {
        $facilities = Facility::latest()->get();
        return view('opd/detail/facility', compact('facilities'));
    }

    public function pegawai()
    {
        $pegawai = Profpeg::latest()->get();
        return view('opd/detail/pegawai', compact('pegawai'));
    }

    public function tupoksi()
    {
        $tupoksi = Profile::take(1)->latest()->get();
        return view('opd/detail/tupoksi', compact('tupoksi'));
    }

    public function maklumat()
    {
        $maklumat = Profile::take(1)->latest()->get();
        return view('opd/detail/maklumat', compact('maklumat'));
    }

    public function kontak()
    {
        $contacts = Contact::take(1)->latest()->get();
        return view('opd/detail/contact', compact('contacts'));
    }

    public function visimisi()
    {
        $visimisi = Profile::take(1)->latest()->get();
        return view('opd/detail/visimisi', compact('visimisi'));
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();
        return view('opd/detail/faq', compact('faqs'));
    }

    public function foto()
    {
        $foto = Photo::latest()->paginate(12);
        return view('opd/detail/foto', compact('foto'));
    }
    public function video()
    {
        $video = Video::latest()->paginate(12);
        return view('opd/detail/video', compact('video'));
    }

    public function struktur()
    {
        $struktur = Profile::take(1)->latest()->get();
        return view('opd/detail/struktur', compact('struktur'));
    }

    public function dasarhukum()
    {
        $dasarhukum = Profile::take(1)->latest()->get();
        return view('opd/detail/dasarhukum', compact('dasarhukum'));
    }

    public function download()
    {
        $downloads = Download::latest()->paginate(5);
        return view('opd/detail/download', compact('downloads'));
    }

    public function getDownload(Request $request, $id)
    {
        $entry = Download::where('id', '=', $id)->firstOrFail();
        $pathToFile = storage_path() . "/app/public/" . $entry->file;
        return response()->download($pathToFile);
    }

    public function berita(Request $request)
    {
        $kategori = Category::latest()->get();
        $posts = News::inRandomOrder()->Paginate(5);
        $sidebar = News::skip(5)->Paginate(5);
        $tags = Tag::get();
        $latestposts = News::with('tags')->take(4)->latest()->get();

        return view('opd/detail/berita', compact('posts', 'kategori', 'sidebar', 'tags','latestposts'));
    }

    public function beritaDetail(Request $request, $id)
    {
        if ($request->has('cari')) {
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            $latestposts = News::with('tags')->take(4)->latest()->get();
            $posts = News::where('title', 'LIKE', '%' . $request->cari . '%')->with('kategori')->get();

            $expiresAt = now()->addHours(3);
            views($id)
                ->cooldown($expiresAt)
                ->record();

            return view('opd/detail/berita', compact('posts', 'kategori', 'sidebar', 'tags','latestposts'));
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = News::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            $latestposts = News::with('tags')->take(4)->latest()->get();

            $expiresAt = now()->addHours(3);
            views($posts)
                ->cooldown($expiresAt)
                ->record();

            return view('opd/detail/berita-detail', compact('posts', 'sidebar', 'kategori', 'tags','latestposts'));
        }
    }

    public function hascarberita(Request $request)
    {
        if ($request->has('cari')) {
            $kategori = Category::latest()->get();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            $latestposts = News::with('tags')->take(4)->latest()->get();
            $posts = News::where('title', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $kategori = Category::latest()->simplePaginate(5);
            $posts = News::where('id', $id)->firstOrFail();
            $tags = Tag::latest()->get();
            $sidebar = News::skip(5)->Paginate(5);
            $latestposts = News::with('tags')->take(4)->latest()->get();
        }
        return view('opd/detail/hascarberita', compact('posts', 'kategori', 'sidebar', 'tags','latestposts'));
    }


    public function kategori(Category $category)
    {

        $kategori = Category::latest()->get();
        $tags = Tag::latest()->get();
        $sidebar = News::skip(5)->Paginate(5);
        $posts = $category->news()->latest()->paginate(4);
        $latestposts = News::with('tags')->take(4)->latest()->get();

        return view('opd/detail/berita', compact('posts', 'kategori', 'sidebar', 'tags','latestposts'));
    }

    public function tag(Tag $tag)
    {

        $kategori = Category::latest()->get();
        $tags = Tag::latest()->get();
        $sidebar = News::skip(5)->Paginate(5);
        $posts = $tag->news()->latest()->paginate(4);
        $latestposts = News::with('tags')->take(4)->latest()->get();

        return view('opd/detail/berita', compact('posts', 'kategori', 'sidebar', 'tags'));
    }

    public function eventDetail(Event $events){
          
        return view('opd/detail/agenda-detail',compact('events'));
    }
}
