<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Link;
use Illuminate\Support\ServiceProvider;

use App\Models\Profile;
use App\Models\Service;
use App\Models\Sosmed;
use App\Models\Profpeg;
use App\Models\News;
use App\Models\Photo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $kontak = Contact::latest()->get();
        $profil = Profile::select('nama_opd', 'short_name', 'kata_sambutan', 'foto_pimpinan', 'logo', 'favicon', 'maklumat')->find(1);
        $links = Link::latest()->get();
        $services = Service::latest()->get();
        $contact = Contact::find(1);
        $sosmeds = Sosmed::get();
        $profpeg = Profpeg::get();
        $latestnews = News::latest()->take(2)->get();
        $posts = News::with('tags')->take(4)->latest()->get();
        $foto = Photo::take(4)->latest()->get();
        $breakingnews = News::latest()->take(10)->get();

        View()->share('links', $links);
        View()->share('services', $services);
        View()->share('contact', $contact);
        View()->share('sosmeds', $sosmeds);
        View()->share('profil', $profil);
        View()->share('kontak', $kontak);
        View()->share('profpeg', $profpeg);
        View()->share('latestnews', $latestnews);
        View()->share('posts', $posts);
        View()->share('foto', $foto);
        View()->share('breakingnews', $breakingnews);
    }
}
