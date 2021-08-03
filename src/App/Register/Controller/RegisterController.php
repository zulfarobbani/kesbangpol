<?php

namespace App\Register\Controller;

use App\OrsospolKesbangpol\Model\OrsospolKesbangpol;
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

			$this->session->set('idUser', $register);
			$this->session->set('namaUser', $request->request->get('namaUser'));
			$this->session->set('idRole', $request->request->get('idRole'));

			$orsospol = new OrsospolKesbangpol();
			$orsospol->create($request->request, null, $register);

			return new RedirectResponse('/beranda');
		} else {
			$this->session->getFlashBag()->add('errorsPassword', 'Konfirmasi Password salah!');

			return new RedirectResponse('/login-register');
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
