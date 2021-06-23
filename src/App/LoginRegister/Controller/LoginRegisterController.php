<?php

namespace App\LoginRegister\Controller;

use App\LoginRegister\Model\LoginRegister;
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
    }

    public function index(Request $request)
    {
        return $this->render_template('loginregister/index'); 
    }
}
