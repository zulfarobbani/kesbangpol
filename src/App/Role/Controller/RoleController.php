<?php

namespace App\Role\Controller;

use App\Role\Model\Role;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class RoleController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Role();
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('role/index', ['datas' => $datas]);
    }

    public function create(Request $request)
    {
        return $this->render_template('role/create');
    }

    public function store(Request $request)
    {
        $this->model->create($request->request);

        return new RedirectResponse('/role');
    }

    public function get(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);

        return $this->render_template('role/edit', ['id' => $id, 'detail' => $detail]);
    }

    public function update(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->update($id, $request->request);

        return new RedirectResponse('/role');
    }

    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        return new RedirectResponse('/role');
    }
}
