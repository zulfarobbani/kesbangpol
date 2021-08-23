<?php

namespace App\Register\Controller;

use App\Media\Model\Media;
use App\OrsospolKesbangpol\Model\OrsospolKesbangpol;
use App\Pegawai\Model\Pegawai;
use App\Publik\Model\Publik;
use App\Register\Model\Register;
use App\Users\Model\Users;
use Core\GlobalFunc;
use PDOException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * 
 */
class RegisterController extends GlobalFunc
{
	public $conn;
	public $model;

	public function __construct()
	{
		$this->model = new Register();
		parent::beginSession();
	}

	public function index(Request $request)
	{
		$errorsPassword = $this->session->getFlashBag()->get('errorsPassword', []);

		return $this->render_template('loginregister/index', ['errors' => $errorsPassword]);
	}

	public function register(Request $request)
	{
		$password = $request->request->get('passwordUser');
		$passwordKonfirmasi = $request->request->get('passwordKonfirmasi');

		if ($password == $passwordKonfirmasi) {
			$user = new Users();
			$register = $user->create($request->request);

			$orsospol = new OrsospolKesbangpol();
			$orsospol->create($request->request, null, $register);

			$this->session->set('idUser', $register);
			$this->session->set('namaUser', $request->request->get('namaUser'));
			$this->session->set('idRole', $request->request->get('idRole'));
			$this->session->set('idOrsospol', $orsospol);
			$this->session->set('namaOrsospol', $request->request->get('namaOrsospol'));
			$this->session->set('singkatanOrsospol', $request->request->get('singkatanOrsospol'));
			$this->session->set('noAHU', $request->request->get('noAHU'));
			$this->session->set('idJenisorsopol', $request->request->get('idJenisorsopol'));
			$this->session->set('namaJenisorsospol', $request->request->get('namaJenisorsospol'));

			return new RedirectResponse('/beranda');
		} else {
			$this->session->getFlashBag()->add('errorsPassword', 'Konfirmasi Password salah!');

			return new RedirectResponse('/login-register');
		}
	}

	public function registerPegawai(Request $request)
	{
		$password = $request->request->get('passwordUser');
		$passwordKonfirmasi = $request->request->get('passwordKonfirmasi');

		if ($password == $passwordKonfirmasi) {
			$user = new Users();
			$register = $user->create($request->request);

			$this->session->set('idUser', $register);
			$this->session->set('namaUser', $request->request->get('namaUser'));
			$this->session->set('idRole', $request->request->get('idRole'));

			$pegawai = new Pegawai();
			$pegawai->create($request->request, $register);

			// store foto pegawai
			$media = new Media();
			$idMedia = uniqid('med');
			$fileFoto = $media->create($idMedia, $_FILES['fotoPegawai'], $register, NULL);

			return new RedirectResponse('/beranda');
		} else {
			$this->session->getFlashBag()->add('errorsPassword', 'Konfirmasi Password salah!');

			return new RedirectResponse('/login-pegawai');
		}
	}

	public function registerPublik(Request $request)
	{
		$password = $request->request->get('passwordUser');
		$passwordKonfirmasi = $request->request->get('passwordKonfirmasi');

		if ($password == $passwordKonfirmasi) {
			$user = new Users();
			$register = $user->create($request->request);

			$this->session->set('idUser', $register);
			$this->session->set('namaUser', $request->request->get('namaUser'));
			$this->session->set('idRole', $request->request->get('idRole'));

			$publik = new Publik();
			$publik->create($request->request, $register);

			// store foto pegawai
			$media = new Media();
			$idMedia = uniqid('med');
			$fileFoto = $media->create($idMedia, $_FILES['foto'], $register, NULL);

			return new RedirectResponse('/beranda');
		} else {
			$this->session->getFlashBag()->add('errorsPassword', 'Konfirmasi Password salah!');

			return new RedirectResponse('/login-publik');
		}
	}

	public function createRegisterEksternal(Request $request)
	{
		$cPassword = $request->request->get('cPassword');
		$password = $request->request->get('passwordUser');
		try {
			if ($password == $cPassword) {
				$this->session->set('namaUser', $request->request->get('namaUser'));
				$this->session->set('nik', $request->request->get('nik'));
				$idUser = uniqid('user');
				$namaUser =  $this->session->get('namaUser');
				$passwordUser = password_hash($request->request->get('passwordUser'), PASSWORD_DEFAULT);
				$nik = $this->session->get('nik');
				$nip = '';
				$createUser = $this->model->createRegisterEksternal($idUser, $namaUser, $passwordUser, $nik, $nip);
				return header("Location: /dashboard");
			} else {
				$this->session->getFlashBag()->add('errorsPassword', 'Confirm Password salah!');
				return header("Location: /register-eksternal");
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}
