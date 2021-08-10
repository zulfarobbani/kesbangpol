<?php

namespace App\Login\Controller;

use App\Login\Model\Login;
use App\OrsospolKesbangpol\Model\OrsospolKesbangpol;
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
                $this->session->set('noAHU', $data_orsospol['noAHU']);
                $this->session->set('idJenisorsopol', $data_orsospol['idJenisorsopol']);
                $this->session->set('namaJenisorsospol', $data_orsospol['namaJenisorsospol']);
            } else {
                $this->session->getFlashBag()->add('errors', "Login gagal, password salah!");

                return new RedirectResponse('/login-register');
            }
        } else {
            $this->session->getFlashBag()->add('errors', "Login gagal, email tidak ditemukan!");

            return new RedirectResponse('/login-register');
        }

        return new RedirectResponse('/beranda');
    }

    public function logout(Request $request)
    {
        $this->session->invalidate();

        return new RedirectResponse('/login-register');
    }
}
