<?php

namespace App\Permissions\Controller;

use App\Permissions\Model\Permissions;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class PermissionsController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Permissions();
    }

    public function form(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('permissions/form', ['datas' => $datas]);
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('permissions/index', ['datas' => $datas]);
    }

    public function create(Request $request)
    {
        return $this->render_template('permissions/create');
    }

    public function store(Request $request)
    {
        $this->model->create($request->request);

        return new RedirectResponse('/permissions');
    }

    public function detail(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);

        return $this->render_template('permissions/edit', ['id' => $id, 'detail' => $detail]);
    }

    public function get(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);

        return new JsonResponse(['detail' => $detail]);
    }

    public function update(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->update($id, $request->request);

        return new RedirectResponse('/permissions');
    }

    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        return new RedirectResponse('/permissions');
    }
}
