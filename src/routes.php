<?php

use Symfony\Component\Routing;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Core\GlobalFunc;

$routes = new Routing\RouteCollection();
$app = new GlobalFunc();

// $app->beginSession();
// dump($app->session->get('idRole'));

// ROUTE APPLICATION START BELOW!!! 
// --------------------------------

// $routes->add('welcome', new Route('/', [
//     '_controller' => function(Request $request) {
//         global $app;

//         return $app->render_template('welcome');
//     }
// ]));

// login orsospol
$routes->add('LoginRegister', new Route('/login-orsospol', [
    '_controller' => 'App\Login\Controller\LoginController::index',
]));
$routes->add('login', new Route('/login', [
    '_controller' => 'App\Login\Controller\LoginController::login',
]));
// login pegawai
$routes->add('LoginRegisterPegawai', new Route('/login-pegawai', [
    '_controller' => 'App\Login\Controller\LoginController::indexPegawai',
]));
$routes->add('loginActionPegawai', new Route('/login-action-pegawai', [
    '_controller' => 'App\Login\Controller\LoginController::loginPegawai',
]));
// login publik
$routes->add('LoginRegisterPublik', new Route('/login-publik', [
    '_controller' => 'App\Login\Controller\LoginController::indexPublik',
]));
$routes->add('loginActionPublik', new Route('/login-action-publik', [
    '_controller' => 'App\Login\Controller\LoginController::loginPublik',
]));

$routes->add('logout', new Route('/logout', [
    '_controller' => 'App\Login\Controller\LoginController::logout',
]));

// register orsospol
$routes->add('registerOrsospol', new Route('/register-orsospol', [
    '_controller' => 'App\Register\Controller\RegisterController::register',
]));
// register pegawai
$routes->add('registerPegawai', new Route('/register-pegawai', [
    '_controller' => 'App\Register\Controller\RegisterController::registerPegawai',
]));
// register publik
$routes->add('registerPublik', new Route('/register-publik', [
    '_controller' => 'App\Register\Controller\RegisterController::registerPublik',
]));


$routes->add('a', new Route('/hellos/get/{id}', [
    '_controller' => 'App\Calendar\Controller\LeapYearController::testing',
]));
//dashboard
$routes->add('dashboard', new Route('/', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::tampil',
]));
//beranda/ home
$routes->add('beranda', new Route('/beranda', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::home',
]));

//profile
$routes->add('biodataAnggota', new Route('/biodata-anggota', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::biodataAnggota',
]));
$routes->add('visimisi', new Route('/visi-misi', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::visimisi',
]));
$routes->add('tupoksi', new Route('/tupoksi', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::tupoksi',
]));

//layanan
$routes->add('layananKonten', new Route('/layanan-kesbangpol', [
    '_controller' => 'App\LayananKesbangpol\Controller\LayananKesbangpolController::layananKonten',
]));
$routes->add('layananKontenStore', new Route('/layanan-kesbangpol/store', [
    '_controller' => 'App\LayananKesbangpol\Controller\LayananKesbangpolController::layananKontenStore',
]));
$routes->add('layananKontenGet', new Route('/layanan-kesbangpol/{id}/get', [
    '_controller' => 'App\LayananKesbangpol\Controller\LayananKesbangpolController::layananKontenGet',
]));
$routes->add('layananKontenUpdate', new Route('/layanan-kesbangpol/{id}/update', [
    '_controller' => 'App\LayananKesbangpol\Controller\LayananKesbangpolController::layananKontenUpdate',
]));
$routes->add('layananKontenDelete', new Route('/layanan-kesbangpol/{id}/delete', [
    '_controller' => 'App\LayananKesbangpol\Controller\LayananKesbangpolController::layananKontenDelete',
]));

//pegawai
$routes->add('pegawaiKonten', new Route('/pegawai-kesbangpol', [
    '_controller' => 'App\Pegawai\Controller\PegawaiController::pegawaiKonten',
]));
$routes->add('pegawaiKontenStore', new Route('/pegawai-kesbangpol/store', [
    '_controller' => 'App\Pegawai\Controller\PegawaiController::pegawaiKontenStore',
]));
$routes->add('pegawaiKontenGet', new Route('/pegawai-kesbangpol/{id}/get', [
    '_controller' => 'App\Pegawai\Controller\PegawaiController::    ',
]));
$routes->add('pegawaiKontenSearch', new Route('/pegawai-kesbangpol/get', [
    '_controller' => 'App\Pegawai\Controller\PegawaiController::pegawaiKontenSearch',
]));
$routes->add('pegawaiKontenUpdate', new Route('/pegawai-kesbangpol/{id}/update', [
    '_controller' => 'App\Pegawai\Controller\PegawaiController::pegawaiKontenUpdate',
]));
$routes->add('pegawaiKontenDelete', new Route('/pegawai-kesbangpol/{id}/delete', [
    '_controller' => 'App\Pegawai\Controller\PegawaiController::pegawaiKontenDelete',
]));

//layanan unduhan
$routes->add('layananUnduhanKontenStore', new Route('/layanan-kesbangpol/unduhan/store', [
    '_controller' => 'App\LayananUnduhan\Controller\LayananUnduhanController::store',
]));
$routes->add('layananUnduhanKontenGet', new Route('/layanan-kesbangpol/unduhan/{id}/get', [
    '_controller' => 'App\LayananUnduhan\Controller\LayananUnduhanController::get',
]));
$routes->add('layananUnduhanKontenUpdate', new Route('/layanan-kesbangpol/unduhan/{id}/update', [
    '_controller' => 'App\LayananUnduhan\Controller\LayananUnduhanController::update',
]));
$routes->add('layananUnduhanKontenDelete', new Route('/layanan-kesbangpol/unduhan/{id}/delete', [
    '_controller' => 'App\LayananUnduhan\Controller\LayananUnduhanController::delete',
]));
$routes->add('layananUnduhanKontenDownload', new Route('/layanan-kesbangpol/unduhan/{id}/download', [
    '_controller' => 'App\LayananUnduhan\Controller\LayananUnduhanController::downloadBerkas',
]));

$routes->add('pendataan', new Route('/layanan/pendataan', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::pendataan',
]));
$routes->add('permohonan-hibah', new Route('/layanan/permohonan-hibah', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::permohonanhibah',
]));
$routes->add('permohonan-penelitian', new Route('/layanan/permohonan-penelitian', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::permohonanpenelitian',
]));
$routes->add('unduhan', new Route('/layanan/unduhan', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::unduhan',
]));

//Organisasi terdaftar
$routes->add('organisasi', new Route('/organisasi-terdaftar',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::organisasi',
]));
//Ormas
$routes->add('ormasi', new Route('/organisasi-terdaftar/ormas',[
    '_controller' => 'App\Orsospol\Controller\OrsospolController::ormas',
]));
//OKP
$routes->add('okp', new Route('/organisasi-terdaftar/okp',[
    '_controller' => 'App\Orsospol\Controller\OrsospolController::okp',
]));
//Komunitas
$routes->add('komunitas', new Route('/organisasi-terdaftar/komunitas',[
    '_controller' => 'App\Orsospol\Controller\OrsospolController::komunitas',
]));
//Parpol
$routes->add('parpol', new Route('/organisasi-terdaftar/parpol',[
    '_controller' => 'App\Orsospol\Controller\OrsospolController::parpol',
]));

// Organisasi Terdaftar
// ormas
$routes->add('ormasKesbangpol', new Route('/organisasi-terdaftar-kesbangpol/ormas', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::ormas',
]));
// okp
$routes->add('okpKesbangpol', new Route('/organisasi-terdaftar-kesbangpol/okp', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::okp',
]));
// komunitas
$routes->add('komunitasKesbangpol', new Route('/organisasi-terdaftar-kesbangpol/komunitas', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::komunitas',
]));
// parpol
$routes->add('parpolKesbangpol', new Route('/organisasi-terdaftar-kesbangpol/parpol', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::parpol',
]));
$routes->add('orsospolKesbangpolStore', new Route('/organisasi-terdaftar-kesbangpol/orsospol/store', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::orsospolStore',
]));
$routes->add('orsospolKesbangpolGet', new Route('/organisasi-terdaftar-kesbangpol/orsospol/{id}/get', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::orsospolGet',
]));
$routes->add('orsospolKesbangpolUpdate', new Route('/organisasi-terdaftar-kesbangpol/orsospol/{id}/update', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::orsospolUpdate',
]));
$routes->add('orsospolKesbangpolDelete', new Route('/organisasi-terdaftar-kesbangpol/orsospol/{id}/delete', [
    '_controller' => 'App\OrsospolKesbangpol\Controller\OrsospolKesbangpolController::orsospolDelete',
]));

//data-organisasi
$routes->add('dataOrganisasi', new Route('/data-organisasi', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::dataOrganisasi',
]));

//struktur-organisasi
$routes->add('strukturOrganisasi', new Route('/struktur-organisasi',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::strukturOrganisasi',
]));

$routes->add('strukturOrganisasiForm', new Route('/struktur-organisasi/create',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::strukturOrganisasi',
]));

//kelengkapan-administrasi
$routes->add('kelengkapanAdministrasi', new Route('/kelengkapan-administrasi',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::kelengkapanAdministrasi',
]));
//program kerja tahunan
$routes->add('progKerjaTahunan', new Route('/prog-kerja-tahunan',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::progKerjaTahunan',
]));
//laporan organisasi
$routes->add('laporanOrganisasi', new Route('/laporan-organisasi',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::laporanOrganisasi',
]));

//Forum Umum
$routes->add('forumUmum', new Route('/forum-umum',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::forumUmum',
]));
//Forum Private
$routes->add('forumPrivate', new Route('/forum-private',[
    '_controller' => 'App\Dashboard\Controller\DashboardController::forumPrivate',
]));
$routes->add('hubungiKami', new Route('/hubungi-kami', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::hubungiKami',
]));

// berita
$routes->add('informasiBerita', new Route('/informasi-berita', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::informasiBerita',
]));
$routes->add('storeCommentberita', new Route('/comment/{id}/store', [
    '_controller' => 'App\CommentBerita\Controller\CommentBeritaController::storeComment',
]));
$routes->add('storeCommentReplyberita', new Route('/comment/reply/{id}', [
    '_controller' => 'App\CommentBerita\Controller\CommentBeritaController::storeCommentonReply',
]));
$routes->add('storeLikeberita', new Route('/likeBerita/{id}/store', [
    '_controller' => 'App\LikeBerita\Controller\LikeBeritaController::storeLikeBerita',
]));
$routes->add('storeDislikeberita', new Route('/dislikeBerita/{id}/store', [
    '_controller' => 'App\LikeBerita\Controller\LikeBeritaController::storeDislikeBerita',
]));

// galeri
$routes->add('informasiGaleri', new Route('/informasi-galeri', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::informasiGaleri',
]));

// pengumuman
$routes->add('informasiPengumuman', new Route('/informasi-pengumuman', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::informasiPengumuman',
]));

// struktur organisasi
$routes->add('strukturOrganisasiTerdaftar', new Route('/struktur-organisasi-terdaftar', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::strukturOrganisasiTerdaftar',
]));




//curd agenda start
$routes->add('agenda', new Route('/informasi/agenda', [
    '_controller' => 'App\Agenda\Controller\AgendaController::index',
]));

$routes->add('agendaedit', new Route('/informasi/agenda/edit/{id}', [
    '_controller' => 'App\Agenda\Controller\AgendaController::ReadOne',
]));

$routes->add('agendaupdate', new Route('/informasi/agenda/edit/{id}/update', [
    '_controller' => 'App\Agenda\Controller\AgendaController::updateordelete',
]));

$routes->add('agendadelete', new Route('/informasi/agenda/delete/{id}', [
    '_controller' => 'App\Agenda\Controller\AgendaController::delete',
]));

$routes->add('agendacreate', new Route('/informasi/agenda/create', [
    '_controller' => 'App\Agenda\Controller\AgendaController::create',
]));

$routes->add('agendasimpan', new Route('/informasi/agenda/store', [
    '_controller' => 'App\Agenda\Controller\AgendaController::store',
]));
//crud agenda end

//crud berita start
$routes->add('beritaKonten', new Route('/informasi-kesbangpol/berita', [
    '_controller' => 'App\Berita\Controller\BeritaController::beritaKonten',
]));
$routes->add('beritaKontenStore', new Route('/informasi-kesbangpol/berita/store', [
    '_controller' => 'App\Berita\Controller\BeritaController::beritaKontenStore',
]));
$routes->add('beritaKontenGet', new Route('/informasi-kesbangpol/berita/{id}/get', [
    '_controller' => 'App\Berita\Controller\BeritaController::beritaKontenGet',
]));
$routes->add('beritaKontenUpdate', new Route('/informasi-kesbangpol/berita/{id}/update', [
    '_controller' => 'App\Berita\Controller\BeritaController::beritaKontenUpdate',
]));
$routes->add('beritaKontenDelete', new Route('/informasi-kesbangpol/berita/{id}/delete', [
    '_controller' => 'App\Berita\Controller\BeritaController::beritaKontenDelete',
]));

//approval berita
$routes->add('beritaKontenApproval', new Route('/informasi-kesbangpol/berita/approval', [
    '_controller' => 'App\Berita\Controller\BeritaController::beritaKontenApproval',
]));
$routes->add('beritaKontenApprovalStore', new Route('/informasi-kesbangpol/berita/{id}/approval', [
    '_controller' => 'App\Berita\Controller\BeritaController::beritaKontenApprovalStore',
]));

// approval komentar
$routes->add('komentarBeritaApproval', new Route('/informasi-kesbangpol/komentar/approval', [
    '_controller' => 'App\CommentBerita\Controller\CommentBeritaController::komentarBeritaApproval',
]));
$routes->add('komentarBeritaApprovalGet', new Route('/informasi-kesbangpol/komentar/approval/{id}/get', [
    '_controller' => 'App\CommentBerita\Controller\CommentBeritaController::komentarBeritaGet',
]));
$routes->add('komentarBeritaApprovalStore', new Route('/informasi-kesbangpol/komentar/{id}/approval', [
    '_controller' => 'App\CommentBerita\Controller\CommentBeritaController::komentarBeritaApprovalStore',
]));

//curd pengumuman
$routes->add('pengumumanKonten', new Route('/informasi-kesbangpol/pengumuman', [
    '_controller' => 'App\PengumumanKesbangpol\Controller\PengumumanKesbangpolController::pengumumanKonten',
]));
$routes->add('pengumumanKontenStore', new Route('/informasi-kesbangpol/pengumuman/store', [
    '_controller' => 'App\PengumumanKesbangpol\Controller\PengumumanKesbangpolController::pengumumanKontenStore',
]));
$routes->add('pengumumanKontenGet', new Route('/informasi-kesbangpol/pengumuman/{id}/get', [
    '_controller' => 'App\PengumumanKesbangpol\Controller\PengumumanKesbangpolController::pengumumanKontenGet',
]));
$routes->add('pengumumanKontenUpdate', new Route('/informasi-kesbangpol/pengumuman/{id}/update', [
    '_controller' => 'App\PengumumanKesbangpol\Controller\PengumumanKesbangpolController::pengumumanKontenUpdate',
]));
$routes->add('pengumumanKontenDelete', new Route('/informasi-kesbangpol/pengumuman/{id}/delete', [
    '_controller' => 'App\PengumumanKesbangpol\Controller\PengumumanKesbangpolController::pengumumanKontenDelete',
]));

//curd kontak darurat
$routes->add('kontakdarurat', new Route('/informasi/kontak-darurat', [
    '_controller' => 'App\KontakDarurat\Controller\KontakDaruratController::kontakdarurat',
]));
$routes->add('kontakdaruratStore', new Route('/informasi/kontak-darurat/store', [
    '_controller' => 'App\KontakDarurat\Controller\KontakDaruratController::kontakdaruratStore',
]));
$routes->add('kontakdaruratGet', new Route('/informasi/kontak-darurat/{id}/get', [
    '_controller' => 'App\KontakDarurat\Controller\KontakDaruratController::kontakdaruratGet',
]));
$routes->add('kontakdaruratUpdate', new Route('/informasi/kontak-darurat/{id}/update', [
    '_controller' => 'App\KontakDarurat\Controller\KontakDaruratController::kontakdaruratUpdate',
]));
$routes->add('kontakdaruratDelete', new Route('/informasi/kontak-darurat/{id}/delete', [
    '_controller' => 'App\KontakDarurat\Controller\KontakDaruratController::kontakdaruratDelete',
]));

//crud banner start
$routes->add('banner', new Route('/informasi/banner', [
    '_controller' => 'App\Banner\Controller\BannerController::index',
]));

$routes->add('bannercreate', new Route('/informasi/banner/create', [
    '_controller' => 'App\Banner\Controller\BannerController::create',
]));

$routes->add('bannersimpan', new Route('/informasi/banner/store', [
    '_controller' => 'App\Banner\Controller\BannerController::store',
]));

$routes->add('banneredit', new Route('/informasi/banner/edit/{id}', [
    '_controller' => 'App\Banner\Controller\BannerController::ReadOne',
]));

$routes->add('bannerupdate', new Route('/informasi/banner/{id}/update', [
    '_controller' => 'App\Banner\Controller\BannerController::update',
]));

$routes->add('bannerdelete', new Route('/informasi/banner/{id}/delete', [
    '_controller' => 'App\Banner\Controller\BannerController::delete',
]));
// crud sakip end

// users
$routes->add('users', new Route('/users', [
    '_controller' => 'App\Users\Controller\UsersController::index',
]));
$routes->add('usersStore', new Route('/users/store', [
    '_controller' => 'App\Users\Controller\UsersController::store',
]));
$routes->add('usersGet', new Route('/users/{id}/get', [
    '_controller' => 'App\Users\Controller\UsersController::get',
]));
$routes->add('usersUpdate', new Route('/users/{id}/update', [
    '_controller' => 'App\Users\Controller\UsersController::update',
]));
$routes->add('usersDelete', new Route('/users/{id}/delete', [
    '_controller' => 'App\Users\Controller\UsersController::delete',
]));


//crud role
$routes->add('roles', new Route('/roles', [
    '_controller' => 'App\Role\Controller\RoleController::form',
]));
$routes->add('rolesGet', new Route('/roles/{id}/get', [
    '_controller' => 'App\Role\Controller\RoleController::get',
]));
$routes->add('rolesStore', new Route('/roles/store', [
    '_controller' => 'App\Role\Controller\RoleController::store',
]));
$routes->add('rolesUpdate', new Route('/roles/{id}/update', [
    '_controller' => 'App\Role\Controller\RoleController::update',
]));
$routes->add('rolesDelete', new Route('/roles/{id}/delete', [
    '_controller' => 'App\Role\Controller\RoleController::delete',
]));

//crud permissions
$routes->add('permissions', new Route('/permissions', [
    '_controller' => 'App\Permissions\Controller\PermissionsController::form',
]));
$routes->add('permissionsGet', new Route('/permissions/{id}/get', [
    '_controller' => 'App\Permissions\Controller\PermissionsController::get',
]));
$routes->add('permissionsStore', new Route('/permissions/store', [
    '_controller' => 'App\Permissions\Controller\PermissionsController::store',
]));
$routes->add('permissionsUpdate', new Route('/permissions/{id}/update', [
    '_controller' => 'App\Permissions\Controller\PermissionsController::update',
]));
$routes->add('permissionsDelete', new Route('/permissions/{id}/delete', [
    '_controller' => 'App\Permissions\Controller\PermissionsController::delete',
]));


$routes->add('berita', new Route('/informasi/berita', [
    '_controller' => 'App\Berita\Controller\BeritaController::index',
]));

$routes->add('beritaedit', new Route('/informasi/berita/edit/{id}', [
    '_controller' => 'App\Berita\Controller\BeritaController::ReadOne',
]));

$routes->add('beritaupdate', new Route('/informasi/berita/edit/{id}/update', [
    '_controller' => 'App\Berita\Controller\BeritaController::update',
]));

$routes->add('beritadelete', new Route('/informasi/berita/delete/{id}', [
    '_controller' => 'App\Berita\Controller\BeritaController::delete',
]));
$routes->add('beritaDetail', new Route('/informasi/berita/{id}', [
    '_controller' => 'App\Berita\Controller\BeritaController::detail',
]));
//crud berita end

//curd galeri start
$routes->add('galeri', new Route('/informasi/galeri', [
    '_controller' => 'App\Gallery\Controller\GalleryController::index',
]));

$routes->add('galericreate', new Route('/informasi/galeri/create', [
    '_controller' => 'App\Gallery\Controller\GalleryController::create',
]));

$routes->add('galerisimpan', new Route('/informasi/galeri/store', [
    '_controller' => 'App\Gallery\Controller\GalleryController::store',
]));

$routes->add('galeriedit', new Route('/informasi/galeri/edit/{id}', [
    '_controller' => 'App\Gallery\Controller\GalleryController::ReadOne',
]));

$routes->add('galeriupdate', new Route('/informasi/galeri/edit/{id}/update', [
    '_controller' => 'App\Gallery\Controller\GalleryController::update',
]));

$routes->add('galeridelete', new Route('/informasi/galeri/delete/{id}', [
    '_controller' => 'App\Gallery\Controller\GalleryController::delete',
]));

$routes->add('galeridetail', new Route('/informasi/galeri/{id}/detail', [
    '_controller' => 'App\Gallery\Controller\GalleryController::detail',
]));


// CRUD Gallery
$routes->add('gallery', new Route('/informasi-kesbangpol/gallery', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::index'
]));
$routes->add('galleryCreate', new Route('/informasi-kesbangpol/gallery/create', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::create'
]));
$routes->add('galleryStore', new Route('/informasi-kesbangpol/gallery/store', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::store'
]));
$routes->add('galleryEdit', new Route('/informasi-kesbangpol/gallery/{id}/edit', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::edit'
]));
$routes->add('galleryUpdate', new Route('/informasi-kesbangpol/gallery/{id}/update', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::update'
]));
$routes->add('galleryDelete', new Route('/informasi-kesbangpol/gallery/{id}/delete', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::delete'
]));
$routes->add('galleryDetail', new Route('/informasi-kesbangpol/gallery/{id}/detail', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::detail'
]));
$routes->add('galleryReceipt', new Route('/informasi-kesbangpol/gallery/{id}/print-receipt', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::print_receipt'
]));
$routes->add('galleryRetur', new Route('/informasi-kesbangpol/gallery/{id}/retur', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::retur'
]));
$routes->add('galleryReturStore', new Route('/informasi-kesbangpol/gallery/{id}/retur-store', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::retur_store'
]));
$routes->add('galleryGet', new Route('/informasi-kesbangpol/gallery/{id}/get', [
    '_controller' => 'App\GalleryKesbangpol\Controller\GalleryKesbangpolController::get'
]));
//crud galeri end

//crud jabatan start
$routes->add('jabatan', new Route('/jabatan', [
    '_controller' => 'App\Jabatan\Controller\JabatanController::index',
]));

$routes->add('jabatancreate', new Route('/jabatan/create', [
    '_controller' => 'App\Jabatan\Controller\JabatanController::create',
]));

$routes->add('jabatansimpan', new Route('/jabatan/store', [
    '_controller' => 'App\Jabatan\Controller\JabatanController::store',
]));

$routes->add('jabatanedit', new Route('/jabatan/edit/{id}', [
    '_controller' => 'App\Jabatan\Controller\JabatanController::ReadOne',
]));

$routes->add('jabatanupdate', new Route('/jabatan/edit/{id}/update', [
    '_controller' => 'App\Jabatan\Controller\JabatanController::update',
]));

$routes->add('jabatandelete', new Route('/jabatan/delete/{id}', [
    '_controller' => 'App\Jabatan\Controller\JabatanController::delete',
]));
//crud jabatan end

//crud jenisorsospol start
$routes->add('jenisorsospol', new Route('/jenisorsospol', [
    '_controller' => 'App\Jenisorsospol\Controller\JenisorsospolController::index',
]));

$routes->add('jenisorsospolcreate', new Route('/jenisorsospol/create', [
    '_controller' => 'App\Jenisorsospol\Controller\JenisorsospolController::create',
]));

$routes->add('jenisorsospolsimpan', new Route('/jenisorsospol/store', [
    '_controller' => 'App\Jenisorsospol\Controller\JenisorsospolController::store',
]));

$routes->add('jenisorsospoledit', new Route('/jenisorsospol/edit/{id}', [
    '_controller' => 'App\Jenisorsospol\Controller\JenisorsospolController::ReadOne',
]));

$routes->add('jenisorsospolupdate', new Route('/jenisorsospol/edit/{id}/update', [
    '_controller' => 'App\Jenisorsospol\Controller\JenisorsospolController::update',
]));

$routes->add('jenisorsospoldelete', new Route('/jenisorsospol/delete/{id}', [
    '_controller' => 'App\Jenisorsospol\Controller\JenisorsospolController::delete',
]));
//crud jenisorsospol end

//crud laporan start
$routes->add('laporan', new Route('/laporan', [
    '_controller' => 'App\Laporan\Controller\LaporanController::index',
]));

$routes->add('laporancreate', new Route('/laporan/create', [
    '_controller' => 'App\Laporan\Controller\LaporanController::create',
]));

$routes->add('laporansimpan', new Route('/laporan/store', [
    '_controller' => 'App\Laporan\Controller\LaporanController::store',
]));

$routes->add('laporanedit', new Route('/laporan/edit/{id}', [
    '_controller' => 'App\Laporan\Controller\LaporanController::ReadOne',
]));

$routes->add('laporanudpate', new Route('/laporan/edit/{id}/update', [
    '_controller' => 'App\Laporan\Controller\LaporanController::update',
]));

$routes->add('laporandelete', new Route('/laporan/delete/{id}', [
    '_controller' => 'App\Laporan\Controller\LaporanController::delete',
]));
//crud layanan out end

//crud layananout start
$routes->add('layananout', new Route('/layananout', [
    '_controller' => 'App\Layananout\Controller\LayananoutController::index',
]));

$routes->add('layananoutcreate', new Route('/layananout/create', [
    '_controller' => 'App\Layananout\Controller\LayananoutController::create',
]));

$routes->add('layananoutsimpan', new Route('/layananout/store', [
    '_controller' => 'App\Layananout\Controller\LayananoutController::store',
]));

$routes->add('layananoutedit', new Route('/layananout/edit/{id}', [
    '_controller' => 'App\Layananout\Controller\LayananoutController::ReadOne',
]));

$routes->add('layananoutupdate', new Route('/layananout/edit/{id}/update', [
    '_controller' => 'App\Layananout\Controller\LayananoutController::update',
]));

$routes->add('layananoutdelete', new Route('/layananout/delete/{id}', [
    '_controller' => 'App\layananout\Controller\layananoutController::delete',
]));
//crud layanan out end


//crud layanan in start
$routes->add('layananin', new Route('/layananin', [
    '_controller' => 'App\Layananin\Controller\LayananinController::index',
]));

$routes->add('layananincreate', new Route('/layananin/create', [
    '_controller' => 'App\Layananin\Controller\LayananinController::create',
]));

$routes->add('layananinsimpan', new Route('/layananin/store', [
    '_controller' => 'App\Layananin\Controller\LayananinController::store',
]));

$routes->add('layananinedit', new Route('/layananin/edit/{id}', [
    '_controller' => 'App\Layananin\Controller\LayananinController::ReadOne',
]));

$routes->add('layananinupdate', new Route('/layananin/edit/{id}/update', [
    '_controller' => 'App\Layananin\Controller\LayananinController::update',
]));

$routes->add('layananindelete', new Route('/layananin/delete/{id}', [
    '_controller' => 'App\Layananin\Controller\LayananinController::delete',
]));
//crud layanan in end

//curd media start
$routes->add('media', new Route('/media', [
    '_controller' => 'App\Media\Controller\MediaController::index',
]));

$routes->add('mediacreate', new Route('/media/create', [
    '_controller' => 'App\Media\Controller\MediaController::create',
]));

$routes->add('mediasimpan', new Route('/media/store', [
    '_controller' => 'App\Media\Controller\MediaController::store',
]));

$routes->add('mediaedit', new Route('/media/edit/{id}', [
    '_controller' => 'App\Media\Controller\MediaController::ReadOne',
]));

$routes->add('mediaupdate', new Route('/media/edit/{id}/update', [
    '_controller' => 'App\Media\Controller\MediaController::update',
]));

$routes->add('mediadelete', new Route('/media/delete/{id}', [
    '_controller' => 'App\Media\Controller\MediaController::delete',
]));
//crud media end

//crud member start
$routes->add('member', new Route('/member', [
    '_controller' => 'App\Member\Controller\MemberController::index',
]));

$routes->add('membercreate', new Route('/member/create', [
    '_controller' => 'App\Member\Controller\MemberController::create',
]));

$routes->add('memberkab', new Route('/member/createkab', [
    '_controller' => 'App\Member\Controller\MemberController::createkab',
]));
$routes->add('memberkec', new Route('/member/createkec', [
    '_controller' => 'App\Member\Controller\MemberController::createkec',
]));

$routes->add('memberkel', new Route('/member/createkel', [
    '_controller' => 'App\Member\Controller\MemberController::createkel',
]));

$routes->add('memberorsos', new Route('/member/createorsos', [
    '_controller' => 'App\Member\Controller\MemberController::createorsos',
]));

$routes->add('membersimpan', new Route('/member/store', [
    '_controller' => 'App\Member\Controller\MemberController::store',
]));

$routes->add('memberedit', new Route('/member/edit/{id}', [
    '_controller' => 'App\Member\Controller\MemberController::ReadOne',
]));

$routes->add('memberupdate', new Route('/member/edit/{idMember}/{idSosmed}/update', [
    '_controller' => 'App\Member\Controller\MemberController::update',
]));

$routes->add('memberdelete', new Route('/member/delete/{idMember}/{idSosmed}', [
    '_controller' => 'App\Member\Controller\MemberController::delete',
]));
//crud member end

//crud orsospol start
$routes->add('orsospol;', new Route('/orsospol', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::index',
]));

$routes->add('orsospolcreate', new Route('/orsospol/create', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::create',
]));

$routes->add('orsospolkab', new Route('/orsospol/createkab', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::createkab',
]));
$routes->add('orsospolkec', new Route('/orsospol/createkec', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::createkec',
]));

$routes->add('orsospolkel', new Route('/orsospol/createkel', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::createkel',
]));


$routes->add('orsospolsimpan', new Route('/orsospol/store', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::store',
]));

$routes->add('orsospoledit', new Route('/orsospol/edit/{id}', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::ReadOne',
]));

$routes->add('orsospolupdate', new Route('/orsospol/edit/{idOrsos}/{idSosmed}/update', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::update',
]));

$routes->add('orsospolhapus', new Route('/orsospol/delete/{idOrsos}/{idSosmed}', [
    '_controller' => 'App\Orsospol\Controller\OrsospolController::delete',
]));
//crud orsospol end

//crud pendidikan start
$routes->add('pendidikan', new Route('/pendidikan', [
    '_controller' => 'App\Pendidikan\Controller\PendidikanController::index',
]));

$routes->add('pendidikancreate', new Route('/pendidikan/create', [
    '_controller' => 'App\Pendidikan\Controller\PendidikanController::create',
]));

$routes->add('pendidikansimpan', new Route('/pendidikan/store', [
    '_controller' => 'App\Pendidikan\Controller\PendidikanController::store',
]));

$routes->add('pendidikanedit', new Route('/pendidikan/edit/{id}', [
    '_controller' => 'App\Pendidikan\Controller\PendidikanController::ReadOne',
]));

$routes->add('pendidikanupdate', new Route('/pendidikan/edit/{id}/update', [
    '_controller' => 'App\Pendidikan\Controller\PendidikanController::update',
]));

$routes->add('pendidikandelete', new Route('/pendidikan/delete/{id}', [
    '_controller' => 'App\Pendidikan\Controller\PendidikanController::delete',
]));
//crud pendidikan end

//crud pengumuman start
$routes->add('pengumuman', new Route('/informasi/pengumuman', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::index',
]));

$routes->add('pengumumancreate', new Route('/informasi/pengumuman/create', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::create',
]));

$routes->add('pengumumansimpan', new Route('/informasi/pengumuman/store', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::store',
]));

$routes->add('pengumumanedit', new Route('/informasi/pengumuman/edit/{id}', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::ReadOne',
]));

$routes->add('pengumumanupdate', new Route('/informasi/pengumuman/edit/{id}/update', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::update',
]));

$routes->add('pengumumandelete', new Route('/informasi/pengumuman/delete/{id}', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::delete',
]));

$routes->add('pengumumanDetail', new Route('/informasi/pengumuman/{id}', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::detail',
]));
// crud pengumuman end


//curd profile start
$routes->add('profile', new Route('/profile', [
    '_controller' => 'App\Profile\Controller\ProfileController::index',
]));

$routes->add('profilecreate', new Route('/profile/create', [
    '_controller' => 'App\Profile\Controller\ProfileController::create',
]));

$routes->add('profilesimpan', new Route('/profile/store', [
    '_controller' => 'App\Profile\Controller\ProfileController::store',
]));

$routes->add('profileedit', new Route('/profile/edit/{id}', [
    '_controller' => 'App\Profile\Controller\ProfileController::ReadOne',
]));

$routes->add('profileupdate', new Route('/profile/edit/{id}/update', [
    '_controller' => 'App\Profile\Controller\ProfileController::update',
]));

$routes->add('profiledelete', new Route('/profile/delete/{id}', [
    '_controller' => 'App\Profile\Controller\ProfileController::delete',
]));
//crud profile end

//curd profile kesbangpol start
$routes->add('profileKesbangpol', new Route('/profile-kesbangpol', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::index',
]));

$routes->add('profileKesbangpolcreate', new Route('/profile-kesbangpol/create', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::create',
]));

$routes->add('profileKesbangpolsimpanSotk', new Route('/profile-kesbangpol/struktur-organisasi/store', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::storeSOTK',
]));

$routes->add('profileKesbangpolsimpanVisimisi', new Route('/profile-kesbangpol/visi-misi/store', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::storeVisimisi',
]));

$routes->add('profileKesbangpolsimpanTupoksi', new Route('/profile-kesbangpol/tupoksi/store', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::storeTupoksi',
]));


$routes->add('profileKesbangpoledit', new Route('/profile-kesbangpol/edit/{id}', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::ReadOne',
]));

$routes->add('profileKesbangpolupdate', new Route('/profile-kesbangpol/edit/{id}/update', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::update',
]));

$routes->add('profileKesbangpoldelete', new Route('/profile-kesbangpol/delete/{id}', [
    '_controller' => 'App\ProfileKesbangpol\Controller\ProfileKesbangpolController::delete',
]));
//crud profile end

// CRUD provinsi
$routes->add('provinsi', new Route('/provinsi', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::index',
]));
$routes->add('provinsiCreate', new Route('/provinsi/create', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::create',
]));
$routes->add('provinsiStore', new Route('/provinsi/store', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::store',
]));
$routes->add('provinsiEdit', new Route('/provinsi/{id}/edit', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::edit',
]));
$routes->add('provinsiDetail', new Route('/provinsi/detail/{id}', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::detail',
]));
$routes->add('provinsiUpdate', new Route('/provinsi/{id}/update', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::update',
]));
$routes->add('provinsiDelete', new Route('/provinsi/{id}/delete', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::delete',
]));

// CRUD kabupaten
$routes->add('kabupaten', new Route('/kabupaten', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::index',
]));
$routes->add('kabupatenCreate', new Route('/kabupaten/create', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::create',
]));
$routes->add('kabupatenStore', new Route('/kabupaten/store', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::store',
]));
$routes->add('kabupatenEdit', new Route('/kabupaten/{id}/edit', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::edit',
]));
$routes->add('kabupatenDetail', new Route('/kabupaten/detail/{id}', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::detail',
]));
$routes->add('kabupatenUpdate', new Route('/kabupaten/{id}/update', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::update',
]));
$routes->add('kabupatenDelete', new Route('/kabupaten/{id}/delete', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::delete',
]));
$routes->add('kabupatenGet', new Route('/kabupaten/get/{id}', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::get',
]));

// CRUD kecamatan
$routes->add('kecamatan', new Route('/kecamatan', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::index',
]));
$routes->add('kecamatanCreate', new Route('/kecamatan/create', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::create',
]));
$routes->add('kecamatanStore', new Route('/kecamatan/store', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::store',
]));
$routes->add('kecamatanDetail', new Route('/kecamatan/detail/{id}', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::detail',
]));
$routes->add('kecamatanEdit', new Route('/kecamatan/{id}/edit', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::edit',
]));
$routes->add('kecamatanUpdate', new Route('/kecamatan/{id}/update', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::update',
]));
$routes->add('kecamatanDelete', new Route('/kecamatan/{id}/delete', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::delete',
]));
$routes->add('kecamatanGet', new Route('/kecamatan/get/{id}', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::get',
]));

// CRUD kelurahan
$routes->add('kelurahan', new Route('/kelurahan', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::index',
]));
$routes->add('kelurahanCreate', new Route('/kelurahan/create', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::create',
]));
$routes->add('kelurahanStore', new Route('/kelurahan/store', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::store',
]));
$routes->add('kelurahanDetail', new Route('/kelurahan/detail/{id}', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::detail',
]));
$routes->add('kelurahanEdit', new Route('/kelurahan/{id}/edit', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::edit',
]));
$routes->add('kelurahanUpdate', new Route('/kelurahan/{id}/update', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::update',
]));
$routes->add('kelurahanDelete', new Route('/kelurahan/{id}/delete', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::delete',
]));
$routes->add('kelurahanGet', new Route('/kelurahan/get/{id}', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::get',
]));

//crud regulasi start
$routes->add('regulasi', new Route('/regulasi', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::index',
]));

$routes->add('regulasicreate', new Route('/regulasi/create', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::create',
]));

$routes->add('regulasisimpan', new Route('/regulasi/store', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::store',
]));

$routes->add('regulasiedit', new Route('/regulasi/edit/{id}', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::ReadOne',
]));

$routes->add('regulasiupdate', new Route('/regulasi/{id}/update', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::update',
]));

$routes->add('regulasidelete', new Route('/regulasi/{id}/delete', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::delete',
]));

$routes->add('regulasidownloadberkas', new Route('/regulasi/{id}/download', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::downloadBerkas',
]));
// crud regulasi end

//crud sakip start
$routes->add('sakip', new Route('/sakip', [
    '_controller' => 'App\Sakip\Controller\SakipController::index',
]));

$routes->add('sakipcreate', new Route('/sakip/create', [
    '_controller' => 'App\Sakip\Controller\SakipController::create',
]));

$routes->add('sakipsimpan', new Route('/sakip/store', [
    '_controller' => 'App\Sakip\Controller\SakipController::store',
]));

$routes->add('sakipedit', new Route('/sakip/edit/{id}', [
    '_controller' => 'App\Sakip\Controller\SakipController::ReadOne',
]));

$routes->add('sakipupdate', new Route('/sakip/{id}/update', [
    '_controller' => 'App\Sakip\Controller\SakipController::update',
]));

$routes->add('sakipdelete', new Route('/sakip/{id}/delete', [
    '_controller' => 'App\Sakip\Controller\SakipController::delete',
]));

$routes->add('sakipdownloadberkas', new Route('/sakip/{id}/download', [
    '_controller' => 'App\Sakip\Controller\SakipController::downloadBerkas',
]));
// crud sakip end


//crud sosmed start
$routes->add('sosmed', new Route('/sosmed', [
    '_controller' => 'App\Sosmed\Controller\SosmedController::index',
]));

$routes->add('sosmedcreate', new Route('/sosmed/create', [
    '_controller' => 'App\Sosmed\Controller\SosmedController::create',
]));

$routes->add('sosmedsimpan', new Route('/sosmed/store', [
    '_controller' => 'App\Sosmed\Controller\SosmedController::store',
]));

$routes->add('sosmededit', new Route('/sosmed/edit/{id}', [
    '_controller' => 'App\Sosmed\Controller\SosmedController::ReadOne',
]));

$routes->add('sosmedupdate', new Route('/sosmed/edit/{id}/update', [
    '_controller' => 'App\Sosmed\Controller\SosmedController::update',
]));

$routes->add('sosmeddelete', new Route('/sosmed/delete/{id}', [
    '_controller' => 'App\Sosmed\Controller\SosmedController::delete',
]));

// crud sakip end
return $routes;