<?php

namespace App\Pegawai\Controller;

use App\Media\Model\Media;
use App\Chronology\Model\Chronology;
use App\Role\Model\Role;
use App\Pegawai\Model\Pegawai;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PegawaiController extends GlobalFunc
{
    public $model;
    public $idUser;
    public $namaUser;
    public $hirarkiUser;
    public $nikUser;
    public $emailUser;

    public function __construct()
    {
        $this->model = new Pegawai();
        parent::beginSession();
    }

    public function index(Request $request)
    {
        // pagination
        $countRows = $this->model->countRows()['count'];
        $page = $request->query->get('page') ? $request->query->get('page') : '1';
        
        if ($request->query->get('data_per_page') != null){
            $result_per_page = $request->query->get('data_per_page');

            if ($request->request->get('data_per_page') != null || $request->request->get('data_per_page') != ""){
                $result_per_page = $request->request->get('data_per_page');
            }
        } else {
            if ($request->request->get('data_per_page') != null || $request->request->get('data_per_page') != ""){
                $result_per_page = $request->request->get('data_per_page');
            } else {
                $result_per_page = 10;
            }
        }

        $page_first_result = ($page-1)*$result_per_page;
        $number_of_page = ceil($countRows/$result_per_page);

        $datas = $this->model->selectAll(" LIMIT ".$page_first_result.",".$result_per_page);

        $pagination = [
            'current_page' => $page,
            'number_of_page' => $number_of_page,
            'page_first_result' => $page_first_result,
            'result_per_page' => $result_per_page,
            'countRows' => $countRows
        ];

        $role = new Role();
        $data_role = $role->selectAll();

        return $this->render_template('users/form', ['datas' => $datas, 'pagination' => $pagination, 'role' => $data_role]);
    }

    public function create(Request $request)
    {
        return $this->render_template('users/create');
    }

    public function store(Request $request)
    {
        $user = $this->model->create($request->request);

        // store foto produk
        if ($_FILES['fotoUser']['name'] != '') {
            $media = new Media();
            $idMedia = uniqid('med');
            $idUser = '1';
            $fotoUser = $media->create($idMedia, $_FILES['fotoUser'], $user, $idUser);
        }

        // create chronlogy
        $chronology = new Chronology();
        $message = $this->model->chronologyMessage('store', 'User 1', [
            'user' => $request->request->get('namaUser')
        ]);
        $createChronology = $chronology->create($message, $user);

        return new RedirectResponse('/users');
    }

    public function edit(Request $request)
    {

        $id_user = $request->attributes->get('id_user');

        $detail = $this->model->selectOne($id_user);

        return $this->render_template('users/edit', ['detail' => $detail]);
    }

    public function update(Request $request)
    {

        $id_user = $request->attributes->get('id');

        $user = $this->model->update($id_user, $request->request);
        $detail = $this->model->selectOne($id_user);

        if ($_FILES['fotoUser']['name'] != '') {
            $media = new Media();
            // select existing foto user
            $selectUser = $media->selectOneMedia("idRelation = '$id_user'");
            // delete existing foto user
            $deleteFotoUser = $media->delete($selectUser['idMedia']);
            // delete file foto user
            $deleteFileFotoUser = $media->deleteFile($selectUser['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $FotoUser = $media->create($idMedia, $_FILES['fotoUser'], $user, $idUser);
        }

        // create chronlogy
        $chronology = new Chronology();
        $message = $this->model->chronologyMessage('update', 'User 1', [
            'user' => $detail['namaUser']
        ]);
        $createChronology = $chronology->create($message, $id_user);

        return new RedirectResponse('/users');
    }

    public function detail(Request $request)
    {

        $id_user = $request->attributes->get('id_user');

        $detail = $this->model->selectOne($id_user);

        return $this->render_template('users/detail', ['detail' => $detail]);
    }

    public function delete(Request $request)
    {

        $id_user = $request->attributes->get('id_user');
        $detail = $this->model->selectOne($id_user);

        $delete = $this->model->delete($id_user);
        
        // create chronlogy
        $chronology = new Chronology();
        $message = $this->model->chronologyMessage('delete', 'User 1', [
            'user' => $detail['namaUser']
        ]);
        $createChronology = $chronology->create($message, $id_user);

        return new RedirectResponse('/users');
    }

    public function pegawaiKontenGet(Request $request)
    {
        $id_user = $request->attributes->get('id');
        $detail = $this->model->selectOne($id_user);

        return new JsonResponse(['detail' => $detail]);
    }

    public function pegawaiKontenSearch(Request $request)
    {
        $idUser = $this->session->get('idUser');
        $search = $request->query->get('search');
        $detail = $this->model->selectAll("WHERE idUser != '$idUser' AND namaPegawai LIKE '%$search%'");

        return new JsonResponse(['detail' => $detail]);
    }

    public function reset_password(Request $request)
    {

        $id_user = $request->attributes->get('id_user');
        $this->model->resetPassword($id_user);

        return new RedirectResponse('/users');
    }

    public function profile(Request $request)
    {
        
    $id_user = 'user60eefe5a7a23d';
        $user = $this->model->selectOne($id_user);

        return $this->render_template('users/profile', ['detail' => $user]);
    }

    public function akun(Request $request)
    {

        $id_user = 'user60eefe5a7a23d';
        $user = $this->model->selectOne($id_user);
        $errors = $this->session->getFlashBag()->get('errors', []);

        return $this->render_template('users/akun', ['detail' => $user, 'errors' => $errors]);
    }

    public function akun_update(Request $request)
    {
        
        $id_user = $request->attributes->get('id_user');
        $user = $this->model->selectOne($id_user);
        $passwordLama = $request->request->get('passwordLama');
        $passwordBaru = $request->request->get('passwordBaru');
        $passwordKonfirmasiBaru = $request->request->get('passwordKonfirmasiBaru');

        if (password_verify($passwordLama, $user['passwordUser'])) {
            if ($passwordBaru == $passwordKonfirmasiBaru) {
                $this->model->updatePassword($id_user, $passwordBaru);
            } else {
                $this->session->getFlashBag()->add('errors', 'Konfirmasi password baru tidak sesuai!');
            }
        } else {
            $this->session->getFlashBag()->add('errors', 'Password lama salah!');
        }

        return new RedirectResponse('/akun');
    }
    
}
