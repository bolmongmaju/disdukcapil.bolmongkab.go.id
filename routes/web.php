<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/visi-misi', [App\Http\Controllers\PageController::class, 'visimisi']);
Route::get('/faq', [App\Http\Controllers\PageController::class, 'faq']);
Route::get('/program-dan-kegiatan', [App\Http\Controllers\PageController::class, 'program']);
Route::get('/daftar-pegawai', [App\Http\Controllers\PageController::class, 'pegawai']);
Route::get('/tupoksi', [App\Http\Controllers\PageController::class, 'tupoksi']);
Route::get('/maklumat', [App\Http\Controllers\PageController::class, 'maklumat']);
Route::get('/struktur', [App\Http\Controllers\PageController::class, 'struktur']);
Route::get('/facility', [App\Http\Controllers\PageController::class, 'facility']);
Route::get('/foto', [App\Http\Controllers\PageController::class, 'foto']);
Route::get('/video', [App\Http\Controllers\PageController::class, 'video']);
Route::get('/kontak', [App\Http\Controllers\PageController::class, 'kontak']);
Route::get('/dasar-hukum', [App\Http\Controllers\PageController::class, 'dasarhukum']);
Route::get('/event', [App\Http\Controllers\PageController::class, 'event']);
Route::get('/event-detail/{events:id}', [App\Http\Controllers\PageController::class, 'eventDetail']);
Route::get('/berita', [App\Http\Controllers\PageController::class, 'berita']);
route::get('/berita-detail/{berita:id}', [App\Http\Controllers\PageController::class, 'beritaDetail'])->name('berita-detail');
route::get('/berita-cari', [App\Http\Controllers\PageController::class, 'hascarberita']);

Route::get('/cari-kategori/{category:id}', [App\Http\Controllers\PageController::class, 'kategori'])->name('cari-kategori');
Route::get('/cari-tag/{tag:id}', [App\Http\Controllers\PageController::class, 'tag'])->name('cari-tag');

Route::get('/download', [App\Http\Controllers\PageController::class, 'download']);
route::get('/getdownload/{downloads:id}', [App\Http\Controllers\PageController::class, 'getDownload'])->name('getdownload');
route::get('/event-detail/{event:id}', [App\Http\Controllers\PageController::class, 'eventDetail'])->name('event-detail');

Route::get('/lapor-disdukcapil', [App\Http\Controllers\PageController::class, 'lapordisdukcapil'])->name('lapor-disdukcapil');
Route::post('/store-disdukcapil', [App\Http\Controllers\PageController::class, 'storeLapor'])->name('store-disdukcapil');

Route::get('/survei-capil', [App\Http\Controllers\PageController::class, 'surveicapil'])->name('survei-capil');
Route::post('/store-surveicapil', [App\Http\Controllers\PageController::class, 'storeSurvei'])->name('store-surveicapil');

Route::get('/penerbitan-dokumen-kartu-keluarga', [App\Http\Controllers\PageController::class, 'layanan1']);
Route::get('/penerbitan-ktp-elektronik', [App\Http\Controllers\PageController::class, 'layanan2']);
Route::get('/penerbitan-kartu-identitas-anak', [App\Http\Controllers\PageController::class, 'layanan3']);
Route::get('/penerbitan-dokumen-surat-keterangan-pindah-wni', [App\Http\Controllers\PageController::class, 'layanan4']);
Route::get('/penerbitan-akta-kelahiran', [App\Http\Controllers\PageController::class, 'layanan5']);
Route::get('/penerbitan-akta-pengakuan-anak', [App\Http\Controllers\PageController::class, 'layanan6']);
Route::get('/penerbitan-akta-pengesahan-anak', [App\Http\Controllers\PageController::class, 'layanan7']);
Route::get('/penerbitan-akta-kematian', [App\Http\Controllers\PageController::class, 'layanan8']);
Route::get('/penerbitan-akta-perkawinan', [App\Http\Controllers\PageController::class, 'layanan9']);

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin']);

        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'], 'as' => 'admin']);

        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'], 'as' => 'admin']);

        //Profile
        Route::resource('/profile', App\Http\Controllers\Admin\ProfileController::class, ['except' => ['show'], 'as' => 'admin']);

        //Contact
        Route::resource('/contact', App\Http\Controllers\Admin\ContactController::class, ['except' => ['show'], 'as' => 'admin']);

        //link
        Route::resource('/link', App\Http\Controllers\Admin\LinkController::class, ['except' => ['show'], 'as' => 'admin']);

        //sosmed
        Route::resource('/sosmed', App\Http\Controllers\Admin\SosmedController::class, ['except' => ['show'], 'as' => 'admin']);

        //Pelayanan
        Route::resource('/pelayanan', App\Http\Controllers\Admin\PelayananController::class, ['except' => ['show'], 'as' => 'admin']);

        //tags
        Route::resource('/tag', App\Http\Controllers\Admin\TagController::class, ['except' => 'show', 'as' => 'admin']);

        //categories
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => 'show', 'as' => 'admin']);

        //news
        Route::resource('/news', App\Http\Controllers\Admin\NewsController::class, ['except' => 'show', 'as' => 'admin']);

        //download
        Route::resource('download', App\Http\Controllers\Admin\DownloadController::class, ['except' => 'show', 'as' => 'admin']);

        //profil pegawai
        Route::resource('/profpeg', App\Http\Controllers\Admin\ProfpegController::class, ['except' => 'show', 'as' => 'admin']);

        //banners
        Route::resource('/banner', App\Http\Controllers\Admin\BannerController::class, ['except' => 'show', 'as' => 'admin']);

        //services
        Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class, ['except' => 'show', 'as' => 'admin']);

        //faq
        Route::resource('/faq', App\Http\Controllers\Admin\FaqController::class, ['except' => 'show', 'as' => 'admin']);

        //event
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class, ['except' => 'show', 'as' => 'admin']);

        //photo
        Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //facility
        Route::resource('/facility', App\Http\Controllers\Admin\FacilityController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //video
        Route::resource('/video', App\Http\Controllers\Admin\VideoController::class, ['except' => 'show', 'as' => 'admin']);

        //slider
        Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);
        
        //lapor disdukcapil
        Route::resource('/lapor', App\Http\Controllers\Admin\LaporController::class, ['except' => 'show', 'as' => 'admin']);

        //survei disdukcapil
        Route::resource('/survei', App\Http\Controllers\Admin\SurveiController::class, ['except' => 'show', 'as' => 'admin']);
        Route::get('/survei-detail/{surveis:id}', [App\Http\Controllers\Admin\SurveiController::class, 'detail'])->name('survei-detail');
        Route::get('/surveyor', [App\Http\Controllers\Admin\SurveiController::class, 'surveyor'])->name('surveyor');
    });
});
