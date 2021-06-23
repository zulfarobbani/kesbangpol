<?php

use Symfony\Component\Routing;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Core\GlobalFunc;

$routes = new Routing\RouteCollection();
$app = new GlobalFunc;

// ############################  !!DO NOT EDIT!! ############################ 
$routes->add('assets', new Routing\Route('/assets/{path}.{_format}', [
    '_controller' => 'Core\GlobalFunc::assets'
], [
    'path' => '[^.]+'
]));
// ############################  ------------ ############################ 


// ROUTE APPLICATION START BELOW!!! 
// --------------------------------

$routes->add('welcome', new Route('/', [
    '_controller' => function(Request $request) {
        global $app;

        return $app->render_template('welcome');
    }
]));

$routes->add('a', new Route('/hellos/get/{id}', [
    '_controller' => 'App\Calendar\Controller\LeapYearController::testing',
]));
//dashboard
$routes->add('dashboard', new Route('/dashboard', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::tampil',
]));
//beranda/ home
$routes->add('beranda', new Route('/beranda', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::home',
]));
//profile
$routes->add('visimisi', new Route('/visi-misi', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::visimisi',
]));
$routes->add('tupoksi', new Route('/tupoksi', [
    '_controller' => 'App\Dashboard\Controller\DashboardController::tupoksi',
]));

//curd agenda start
$routes->add('agenda', new Route('/agenda', [
    '_controller' => 'App\Agenda\Controller\AgendaController::index',
]));

$routes->add('agendaedit', new Route('/agenda/edit/{id}', [
    '_controller' => 'App\Agenda\Controller\AgendaController::ReadOne',
]));

$routes->add('agendaupdate', new Route('/agenda/edit/{id}/update', [
    '_controller' => 'App\Agenda\Controller\AgendaController::updateordelete',
]));

$routes->add('agendadelete', new Route('/agenda/delete/{id}', [
    '_controller' => 'App\Agenda\Controller\AgendaController::delete',
]));

$routes->add('agendacreate', new Route('/agenda/create', [
    '_controller' => 'App\Agenda\Controller\AgendaController::create',
]));

$routes->add('agendasimpan', new Route('/agenda/store', [
    '_controller' => 'App\Agenda\Controller\AgendaController::store',
]));
//crud agenda end

//curd berita start
$routes->add('berita', new Route('/berita', [
    '_controller' => 'App\Berita\Controller\BeritaController::index',
]));

$routes->add('beritacreate', new Route('/berita/create', [
    '_controller' => 'App\Berita\Controller\BeritaController::create',
]));

$routes->add('beritasimpan', new Route('/berita/store', [
    '_controller' => 'App\Berita\Controller\BeritaController::store',
]));

$routes->add('beritaedit', new Route('/berita/edit/{id}', [
    '_controller' => 'App\Berita\Controller\BeritaController::ReadOne',
]));

$routes->add('beritaupdate', new Route('/berita/edit/{id}/update', [
    '_controller' => 'App\Berita\Controller\BeritaController::update',
]));

$routes->add('beritadelete', new Route('/berita/delete/{id}', [
    '_controller' => 'App\Berita\Controller\BeritaController::delete',
]));
//crud berita end

//curd galeri start
$routes->add('galeri', new Route('/galeri', [
    '_controller' => 'App\Gallery\Controller\GalleryController::index',
]));

$routes->add('galericreate', new Route('/galeri/create', [
    '_controller' => 'App\Gallery\Controller\GalleryController::create',
]));

$routes->add('galerisimpan', new Route('/galeri/store', [
    '_controller' => 'App\Gallery\Controller\GalleryController::store',
]));

$routes->add('galeriedit', new Route('/galeri/edit/{id}', [
    '_controller' => 'App\Gallery\Controller\GalleryController::ReadOne',
]));

$routes->add('galeriupdate', new Route('/galeri/edit/{id}/update', [
    '_controller' => 'App\Gallery\Controller\GalleryController::update',
]));

$routes->add('galeridelete', new Route('/galeri/delete/{id}', [
    '_controller' => 'App\Gallery\Controller\GalleryController::delete',
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

//crud kabupaten start
$routes->add('kabupaten', new Route('/kabupaten', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::index',
]));

$routes->add('kabupatencreate', new Route('/kabupaten/create', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::create',
]));

$routes->add('kabupatensimpan', new Route('/kabupaten/store', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::store',
]));

$routes->add('kabupatenedit', new Route('/kabupaten/edit/{id}', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::ReadOne',
]));

$routes->add('kabupatenupdate', new Route('/kabupaten/edit/{id}/update', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::update',
]));

$routes->add('kabupatendelete', new Route('/kabupaten/delete/{id}', [
    '_controller' => 'App\Kabupaten\Controller\KabupatenController::delete',
]));
// crud kabupaten end

//crud kecamatan start
$routes->add('kecamatan', new Route('/kecamatan', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::index',
]));

$routes->add('kecamatancreate', new Route('/kecamatan/create', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::create',
]));

$routes->add('kecamatansimpan', new Route('/kecamatan/store', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::store',
]));

$routes->add('kecamatanedit', new Route('/kecamatan/edit/{id}', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::ReadOne',
]));

$routes->add('kecamatanupdate', new Route('/kecamatan/edit/{id}/update', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::update',
]));

$routes->add('kecamatandelete', new Route('/kecamatan/delete/{id}', [
    '_controller' => 'App\Kecamatan\Controller\KecamatanController::delete',
]));
// crud kecamatan end

//crud kelurahan start
$routes->add('kelurahan', new Route('/kelurahan', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::index',
]));

$routes->add('kelurahancreate', new Route('/kelurahan/create', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::create',
]));

$routes->add('kelurahansimpan', new Route('/kelurahan/store', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::store',
]));

$routes->add('kelurahanedit', new Route('/kelurahan/edit/{id}', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::ReadOne',
]));

$routes->add('kelurahanupdate', new Route('/kelurahan/edit/{id}/update', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::update',
]));

$routes->add('kelurahandelete', new Route('/kelurahan/delete/{id}', [
    '_controller' => 'App\Kelurahan\Controller\KelurahanController::delete',
]));
// crud kelurahan end

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
$routes->add('pengumuman', new Route('/pengumuman', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::index',
]));

$routes->add('pengumumancreate', new Route('/pengumuman/create', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::create',
]));

$routes->add('pengumumansimpan', new Route('/pengumuman/store', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::store',
]));

$routes->add('pengumumanedit', new Route('/pengumuman/edit/{id}', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::ReadOne',
]));

$routes->add('pengumumanupdate', new Route('/pengumuman/edit/{id}/update', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::update',
]));

$routes->add('pengumumandelete', new Route('/pengumuman/delete/{id}', [
    '_controller' => 'App\Pengumuman\Controller\PengumumanController::delete',
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

//crud provinsi start
$routes->add('provinsi', new Route('/provinsi', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::index',
]));

$routes->add('provinsicreate', new Route('/provinsi/create', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::create',
]));

$routes->add('provinsisimpan', new Route('/provinsi/store', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::store',
]));

$routes->add('provinsiedit', new Route('/provinsi/edit/{id}', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::ReadOne',
]));

$routes->add('provinsiupdate', new Route('/provinsi/edit/{id}/update', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::update',
]));

$routes->add('provinsidelete', new Route('/provinsi/delete/{id}', [
    '_controller' => 'App\Provinsi\Controller\ProvinsiController::delete',
]));
// crud provinsi end

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

$routes->add('regulasiupdate', new Route('/regulasi/edit/{id}/update', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::update',
]));

$routes->add('regulasidelete', new Route('/regulasi/delete/{id}', [
    '_controller' => 'App\Regulasi\Controller\RegulasiController::delete',
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

$routes->add('sakipupdate', new Route('/sakip/edit/{id}/update', [
    '_controller' => 'App\Sakip\Controller\SakipController::update',
]));

$routes->add('sakipdelete', new Route('/sakip/delete/{id}', [
    '_controller' => 'App\Sakip\Controller\SakipController::delete',
]));

$routes->add('sakipdownloadberkas', new Route('/sakip/download-berkas/{id}', [
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