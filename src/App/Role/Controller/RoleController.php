<?php

namespace App\Role\Controller;

use App\Permissions\Model\Permissions;
use App\Role\Model\Role;
use App\Permissions\Model\RolePermissions;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class RoleController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Role();
    }

    public function form(Request $request)
    {
        $datas = $this->model->selectAll();
        $permissions = new Permissions();
        $data_permissions = $permissions->selectAll();

        return $this->render_template('roles/form', ['datas' => $datas, 'permissions' => $data_permissions]);
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('roles/index', ['datas' => $datas]);
    }

    public function create(Request $request)
    {
        return $this->render_template('roles/create');
    }

    public function store(Request $request)
    {
        $this->model->create($request->request);

        return new RedirectResponse('/roles');
    }

    public function edit(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);

        return $this->render_template('roles/edit', ['id' => $id, 'detail' => $detail]);
    }

    public function get(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);

        $role_permissions = new RolePermissions();
        $get_role_permissions = $role_permissions->get($id);

        return new JsonResponse(['detail' => $detail, 'permissions' => $get_role_permissions]);
    }

    public function update(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->update($id, $request->request);

        $role_permissions = new RolePermissions();
        $update_role_permissions = $role_permissions->update($request->request, $id);

        return new RedirectResponse('/roles');
    }

    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        return new RedirectResponse('/roles');
    }
}
