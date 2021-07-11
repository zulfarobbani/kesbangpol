<?php

namespace App\LayananUnduhan\Controller;

use App\Media\Model\Media;
use App\LayananUnduhan\Model\LayananUnduhan;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LayananUnduhanController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new LayananUnduhan();
    }
    
    public function store(Request $request)
    {
        $datas = [
            'namaLayananunduhan' => $request->request->get('namaLayananunduhan'),
        ];
        $layananUnduhan = $this->model->create($datas);

        $media = new Media();
        $idMedia = uniqid('med');
        $idUser = '1';
        $fileLayananunduhan = $media->create($idMedia, $_FILES['fileLayananunduhan'], $layananUnduhan, $idUser);

        return new RedirectResponse('/layanan-kesbangpol');
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
            'namaLayananunduhan' => $request->request->get('namaLayananunduhan'),
        ];
        $id = $request->attributes->get('id');
        $layananUnduhan = $this->model->update($id, $datas);

        if ($_FILES['fileLayananunduhan']['name'] != '') {
            $media = new Media();
            // select existing media layanan unduhan
            $selectLayananunduhan = $media->selectOneMedia("idRelation = '$id'");
            // delete existing media layanan unduhan
            $deleteLayananunduhan = $media->delete($selectLayananunduhan['idMedia']);
            // delete file media layanan unduhan
            $deleteFileLayananunduhan = $media->deleteFile($selectLayananunduhan['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $fileLayananunduhan = $media->create($idMedia, $_FILES['fileLayananunduhan'], $layananUnduhan, $idUser);
        }

        return new RedirectResponse('/layanan-kesbangpol');
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        $media = new Media();
        // select existing media layanan unduhan
        $selectLayananunduhan = $media->selectOneMedia("idRelation = '$id'");
        // delete existing media layanan unduhan
        $deleteLayananunduhan = $media->delete($selectLayananunduhan['idMedia']);
        // delete file media layanan unduhan
        $deleteFileLayananunduhan = $media->deleteFile($selectLayananunduhan['pathMedia']);

        return new RedirectResponse('/layanan-kesbangpol');
    }
}
