<?php

namespace App\Sosmed\Controller;

use App\Sosmed\Model\Sosmed;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

class SosmedController extends GlobalFunc
{
    public $model;

    public function __construct()
    {
        $this->model = new Sosmed();
        
    }
    
    public function index(Request $request)
    {
        $datas = $this->model->selectAll();
        return $this->render_template('sosmed/index', ['datas' => $datas]);
    }
    
    public function create(Request $request)
    {
       
        return $this->render_template('sosmed/create');

    }
    public function store(Request $request)
    {
        $instagramSosialmedia = $request->request->get('instagram');
        $facebookSosialmedia = $request->request->get('facebook');
        $youtubeSosialmedia = $request->request->get('youtube');
        $twitterSosialmedia = $request->request->get('twitter');
        $whatsappSosialmedia = $request->request->get('whatsapp');
        $telegramSosialmedia = $request->request->get('telegram');
        $dateCreate = date("Y-m-d");

        $data_test = array(       
            'instagramSosialmedia' =>$instagramSosialmedia,
            'facebookSosialmedia' =>$facebookSosialmedia,
            'youtubeSosialmedia' =>$youtubeSosialmedia,
            'twitterSosialmedia' =>$twitterSosialmedia,
            'whatsappSosialmedia' =>$whatsappSosialmedia,
            'telegramSosialmedia' =>$telegramSosialmedia,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        return header("location:http://kesbangpol.com/sosmed");
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('sosmed/edit', ['idSosialmedia' => $datas['idSosialmedia'], 'instagramSosialmedia'=>$datas['instagramSosialmedia'], 'facebookSosialmedia'=>$datas['facebookSosialmedia'], 'youtubeSosialmedia'=>$datas['youtubeSosialmedia'], 'twitterSosialmedia'=>$datas['twitterSosialmedia'], 'whatsappSosialmedia'=>$datas['whatsappSosialmedia'], 'telegramSosialmedia'=>$datas['telegramSosialmedia']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $instagramSosialmedia = $request->request->get('instagram');
        $facebookSosialmedia = $request->request->get('facebook');
        $youtubeSosialmedia = $request->request->get('youtube');
        $twitterSosialmedia = $request->request->get('twitter');
        $whatsappSosialmedia = $request->request->get('whatsapp');
        $telegramSosialmedia = $request->request->get('telegram');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'instagramSosialmedia' =>$instagramSosialmedia,
            'facebookSosialmedia' =>$facebookSosialmedia,
            'youtubeSosialmedia' =>$youtubeSosialmedia,
            'twitterSosialmedia' =>$twitterSosialmedia,
            'whatsappSosialmedia' =>$whatsappSosialmedia,
            'telegramSosialmedia' =>$telegramSosialmedia
        );   
    
        $this->model->update($id, $data_test);
        
      return header("location:http://kesbangpol.com/sosmed");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/sosmed");
    }
}