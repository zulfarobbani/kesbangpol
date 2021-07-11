<?php

namespace App\Sakip\Controller;

use App\Media\Model\Media;
use App\Sakip\Model\Sakip;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SakipController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Sakip();
    }

    public function index(Request $request)
    {
        $datas = $this->model->selectAll();

        return $this->render_template('sakip/index', ['datas' => $datas]);
    }

    public function create(Request $request)
    {

        return $this->render_template('sakip/create');
    }
    // public function store(Request $request)
    // {
    //     // $namaSakip = $request->request->get('namaSakip');
    //     $namaSakip1 = $_FILES['namaSakip']['name'];
    //     $namaSementara = $_FILES['namaSakip']['tmp_name'];
    //     $ekstensi_diperbolehkan	= array('pdf','docx');
    //     $x = explode('.', $namaSakip1);
    //     $nama = strtolower($x['0']);
    //     $ekstensi = strtolower(end($x));
    //     $ukuran	= $_FILES['namaSakip']['size'];
    //     $dateCreate = date("Y-m-d");
    //     if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    // 	    if($ukuran < 1044070){			
    // 		move_uploaded_file($namaSementara, __DIR__.'/../../../assets/terupload/'.$namaSakip1);
    //         }
    //     }
    //     $data_test = array(       
    //         'namaSakip' =>$namaSakip1,
    //         'dateCreate' => $dateCreate
    //     );

    //     $this->model->create($data_test);
    //     return header("location:http://kesbangpol.com/sakip");
    // }
    public function store(Request $request)
    {
        $datas = [
            'namaSakip' => $request->request->get('namaSakip'),
        ];
        $sakip = $this->model->create($datas);

        $media = new Media();
        $idMedia = uniqid('med');
        $idUser = '1';
        $fileSakip = $media->create($idMedia, $_FILES['fileSakip'], $sakip, $idUser);

        return new RedirectResponse('/profile-kesbangpol');
    }

    public function downloadBerkas(Request $request)
    {
        $idSakip = $request->attributes->get("id");

        $detail = $this->model->selectOne($idSakip);

        $filepath = __DIR__ . "/../../../../web/assets/media/" . $detail['pathMedia'];

        if (file_exists($filepath)) {
            $response = new Response();
            $response->headers->set('Content-type', 'application/octet-stream');
            $response->headers->set('Content-Disposition', sprintf('attachment; filename="%s"', $detail['pathMedia']));
            $response->setContent(file_get_contents($filepath));
            $response->setStatusCode(200);
            $response->headers->set('Content-Transfer-Encoding', 'binary');
            $response->headers->set('Pragma', 'no-cache');
            $response->headers->set('Expires', '0');

            return $response;
        } else {
            http_response_code(404);
            die();
        }
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);

        return $this->render_template('sakip/edit', ['idSakip' => $datas['idSakip'], 'namaSakip' => $datas['namaSakip']]);
    }
    public function update(Request $request)
    {
        $datas = [
            'namaSakip' => $request->request->get('namaSakip'),
        ];
        $id = $request->attributes->get('id');
        $sakip = $this->model->update($id, $datas);

        if ($_FILES['fileSakip']['name'] != '') {
            $media = new Media();
            // select existing media sakip
            $selectSakip = $media->selectOneMedia("idRelation = '$id'");
            // delete existing media sakip
            $deleteSakip = $media->delete($selectSakip['idMedia']);
            // delete file media sakip
            $deleteFileSakip = $media->deleteFile($selectSakip['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $fileSakip = $media->create($idMedia, $_FILES['fileSakip'], $sakip, $idUser);
        }

        return new RedirectResponse('/profile-kesbangpol');
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        $media = new Media();
        // select existing media sakip
        $selectSakip = $media->selectOneMedia("idRelation = '$id'");
        // delete existing media sakip
        $deleteSakip = $media->delete($selectSakip['idMedia']);
        // delete file media sakip
        $deleteFileSakip = $media->deleteFile($selectSakip['pathMedia']);

        return new RedirectResponse('/profile-kesbangpol');
    }
}
