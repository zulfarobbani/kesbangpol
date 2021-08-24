<?php

namespace App\Login\Controller;

use App\Login\Model\Login;
use App\OrsospolKesbangpol\Model\JenisOrsospolKesbangpol;
use App\OrsospolKesbangpol\Model\OrsospolKesbangpol;
use App\Publik\Model\Publik;
use App\User\Model\User;
use App\Users\Model\Users;
use Core\GlobalFunc;
use Exception;
use Firebase\JWT\JWT;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Login();
        parent::beginSession();
    }

    public function index(Request $request)
    {
        $errorsPassword = $this->session->getFlashBag()->get('errorsPassword', []);
        $jenisorsospol = new JenisOrsospolKesbangpol();
        $data_jenisorsospol = $jenisorsospol->selectAll();

        return $this->render_template('loginorsospol/index', ['errors' => $errorsPassword, 'jenisorsospol' => $data_jenisorsospol]); 
    }

    public function indexPegawai(Request $request)
    {
        $errorsPassword = $this->session->getFlashBag()->get('errorsPassword', []);

        return $this->render_template('loginpegawai/index', ['errors' => $errorsPassword]); 
    }

    public function indexPublik(Request $request)
    {
        $errorsPassword = $this->session->getFlashBag()->get('errorsPassword', []);

        return $this->render_template('loginpublik/index', ['errors' => $errorsPassword]); 
    }

    public function login(Request $request)
    {
        $usernameUser = $request->request->get('usernameUser');
        $passwordUser = $request->request->get('passwordUser');

        $user = new Users();
        $data_user = $user->selectOneWhere("WHERE usernameUser = '$usernameUser'");

        if ($data_user) {
            if (password_verify($passwordUser, $data_user['passwordUser'])) {
                $orsospol = new OrsospolKesbangpol();
                $data_orsospol = $orsospol->selectOrsospolAkun($data_user['idUser']);

                $this->session->set('idUser', $data_user['idUser']);
                $this->session->set('namaUser', $data_user['namaUser']);
                $this->session->set('idRole', $data_user['idRole']);
                $this->session->set('aliasRole', $data_user['aliasRole']);
                $this->session->set('idOrsospol', $data_orsospol['idOrsospol']);
                $this->session->set('namaOrsospol', $data_orsospol['namaOrsospol']);
                $this->session->set('singkatanOrsospol', $data_orsospol['singkatanOrsospol']);
                $this->session->set('noAHU', $data_orsospol['noAHU']);
                $this->session->set('idJenisorsospol', $data_orsospol['idJenisorsospol']);
                $this->session->set('namaJenisorsospol', $data_orsospol['namaJenisorsospol']);
                $this->session->set('regisBaru', $data_orsospol['regisBaru']);
            } else {
                $this->session->getFlashBag()->add('errors', "Login gagal, password salah!");

                return new RedirectResponse('/login-orsospol');
            }
        } else {
            $this->session->getFlashBag()->add('errors', "Login gagal, email tidak ditemukan!");

            return new RedirectResponse('/login-orsospol');
        }

        return new RedirectResponse('/beranda');
    }

    public function loginPegawai(Request $request)
    {
        $usernameUser = $request->request->get('usernameUser');
        $passwordUser = $request->request->get('passwordUser');

        $user = new Users();
        $data_user = $user->selectOneWhere("WHERE usernameUser = '$usernameUser'");

        if ($data_user) {
            if (password_verify($passwordUser, $data_user['passwordUser'])) {
                $pegawai = new OrsospolKesbangpol();
                $pegawai = $pegawai->selectOrsospolAkun($data_user['idUser']);

                $this->session->set('idUser', $data_user['idUser']);
                $this->session->set('namaUser', $data_user['namaUser']);
                $this->session->set('idRole', $data_user['idRole']);
                $this->session->set('aliasRole', $data_user['aliasRole']);
                $this->session->set('idPegawai', $pegawai['idPegawai']);
                $this->session->set('namaPegawai', $pegawai['namaPegawai']);
            } else {
                $this->session->getFlashBag()->add('errors', "Login gagal, password salah!");

                return new RedirectResponse('/login-pegawai');
            }
        } else {
            $this->session->getFlashBag()->add('errors', "Login gagal, email tidak ditemukan!");

            return new RedirectResponse('/login-pegawai');
        }

        return new RedirectResponse('/beranda');
    }

    public function loginPublik(Request $request)
    {
        $usernameUser = $request->request->get('usernameUser');
        $passwordUser = $request->request->get('passwordUser');

        $user = new Users();
        $data_user = $user->selectOneWhere("WHERE usernameUser = '$usernameUser'");

        if ($data_user) {
            if (password_verify($passwordUser, $data_user['passwordUser'])) {
                $publik = new Publik();
                $publik = $publik->selectOne($data_user['idUser']);

                $this->session->set('idUser', $data_user['idUser']);
                $this->session->set('namaUser', $data_user['namaUser']);
                $this->session->set('idRole', $data_user['idRole']);
                $this->session->set('aliasRole', $data_user['aliasRole']);
                $this->session->set('idPublik', $publik['idPublik']);
                $this->session->set('nama', $publik['nama']);
            } else {
                $this->session->getFlashBag()->add('errors', "Login gagal, password salah!");

                return new RedirectResponse('/login-publik');
            }
        } else {
            $this->session->getFlashBag()->add('errors', "Login gagal, email tidak ditemukan!");

            return new RedirectResponse('/login-publik');
        }

        return new RedirectResponse('/beranda');
    }

    public function logout(Request $request)
    {
        $this->session->invalidate();

        return new RedirectResponse('/login-orsospol');
    }
}
