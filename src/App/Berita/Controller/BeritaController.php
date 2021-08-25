<?php

namespace App\Berita\Controller;

use App\Banner\Model\Banner;
use App\Berita\Model\Berita;
use App\CommentBerita\Model\CommentBerita;
use App\LikeBerita\Model\LikeBerita;
use App\Media\Model\Media;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class BeritaController extends GlobalFunc
{
    public $model;
    public $model2;

    public function __construct()
    {
        $this->model = new Berita();
        $this->model2 = new Media();
        parent::beginSession();
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        
        return $this->render_template('informasi/berita/index', ['datas' => $datas]);
    }

    public function detail(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);
        $timeditorberita = $this->model->selectTimeditorberita($id);
        $authorberita = $this->model->selectAuthorberita($detail['authorBerita']);
        $tagberita = $this->model->selectTag($detail['idBerita']);

        $msgSuccess = $this->session->getFlashBag()->get('msgSuccess', []);

        $comment = new CommentBerita();
        $commentBerita = $comment->selectAll("WHERE commentberita.idBerita = '$id' AND (commentonComment IS NULL OR commentonComment = '') AND approval = '1'");

        $like = new LikeBerita();
        $likeBerita = $like->selectAll("WHERE likeberita.idBerita = '$id' AND likeberita.idUser = '".$this->session->get('idUser')."' AND jenislikeBerita = '1'");
        $dislikeBerita = $like->selectAll("WHERE likeberita.idBerita = '$id' AND likeberita.idUser = '".$this->session->get('idUser')."' AND jenislikeBerita = '2'");

        return $this->render_template('informasi/berita/detail', ['detail' => $detail, 'timeditorberita' => $timeditorberita, 'authorberita' => $authorberita, 'tagberita' => $tagberita, 'msgSuccess' => $msgSuccess, 'commentBerita' => $commentBerita, 'likeBerita' => $likeBerita, 'dislikeBerita' => $dislikeBerita]);
    }

    public function beritaKonten(Request $request)
    {
        $idUser = $this->session->get('idUser');
        $aliasRole = $this->session->get('aliasRole');
        $where = $aliasRole != 'kesbangpol' ? "WHERE authorBerita = '$idUser'" : "";
        $datas = $this->model->selectAll($where);

        return $this->render_template('informasi/berita/form', ['datas' => $datas]);
    }

    public function beritaKontenApproval(Request $request)
    {
        $datas = $this->model->selectAll();

        return $this->render_template('informasi/berita/formApproval', ['datas' => $datas]);
    }

    public function beritaKontenStore(Request $request)
    {
        // dd($request->request);
        $data = $request->request;
        $tagBerita = explode(',', $request->request->get('tagBerita'));
        $idUser = $this->session->get('idUser');
        $berita = $this->model->create($data, $idUser);
        $timeditorberita = $this->model->createTimeditor($data, $berita);
        $storetagBerita = $this->model->createTagberita($tagBerita, $berita);

        // store cover berita
        $media = new Media();
        $idMedia = uniqid('med');
        $fileCoverBerita = $media->create($idMedia, $_FILES['coverBerita'], $berita, $idUser, 'cover_berita');

        return new RedirectResponse('/informasi-kesbangpol/berita');
    }

    public function beritaKontenGet(Request $request)
    {
        $id = $request->attributes->get('id');
        $detail = $this->model->selectOne($id);
        $detail['deskripsiBerita'] = html_entity_decode(nl2br($detail['deskripsiBerita']));

        return new JsonResponse([
            'data' => $detail
        ]);
    }

    public function beritaKontenUpdate(Request $request)
    {
        $id = $request->attributes->get('id');
        $data = $request->request;
        $berita = $this->model->update($id, $data);

        if ($_FILES['coverBerita']['name'] != '') {
            $media = new Media();
            // select existing media coverBerita
            $selectcoverBerita = $media->selectOneMedia("idRelation = '$id'");
            // delete existing media coverBerita
            $deletecoverBerita = $media->delete($selectcoverBerita['idMedia']);
            // delete file media coverBerita
            $deleteFilecoverBerita = $media->deleteFile($selectcoverBerita['pathMedia']);

            $idMedia = uniqid('med');
            $idUser = '1';
            $filecoverBerita = $media->create($idMedia, $_FILES['coverBerita'], $berita, $idUser, 'cover_berita');
        }

        return new RedirectResponse('/informasi-kesbangpol/berita');
    }

    public function beritaKontenDelete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);

        $media = new Media();
        // select existing media cover Berita
        $selectcoverBerita = $media->selectOneMedia("idRelation = '$id'");
        // delete existing media cover Berita
        $deletecoverBerita = $media->delete($selectcoverBerita['idMedia']);
        // delete file media cover Berita
        $deleteFilecoverBerita = $media->deleteFile($selectcoverBerita['pathMedia']);

        return new RedirectResponse('/informasi-kesbangpol/berita');
    }

    public function beritaKontenApprovalStore(Request $request)
    {
        $id = $request->attributes->get('id');
        $data = $request->request->get('approvalBerita');
        $berita = $this->model->approval($id, $data);

        return new RedirectResponse('/informasi-kesbangpol/berita/approval');
    }
}