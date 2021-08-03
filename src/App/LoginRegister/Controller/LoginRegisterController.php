<?php

namespace App\LoginRegister\Controller;

use App\LoginRegister\Model\LoginRegister;
use App\OrsospolKesbangpol\Model\JenisOrsospolKesbangpol;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LoginRegisterController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new LoginRegister();
        parent::beginSession();
    }

    public function index(Request $request)
    {
        // $this->dd(get_class_methods($this->session));
        $errorsPassword = $this->session->getFlashBag()->get('errors', []);
        // $errorsPassword = [];
        $jenisorsospol = new JenisOrsospolKesbangpol();
        $data_jenisorsospol = $jenisorsospol->selectAll();

        return $this->render_template('loginregister/index', ['errors' => $errorsPassword, 'jenisorsospol' => $data_jenisorsospol]); 
    }
}
