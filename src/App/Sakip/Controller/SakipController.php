<?php

namespace App\Sakip\Controller;

use App\Sakip\Model\Sakip;
use Core\GlobalFunc;
use Symfony\Component\HttpFoundation\Request;

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
    public function store(Request $request)
    {
        // $namaSakip = $request->request->get('namaSakip');
        $namaSakip1 = $_FILES['namaSakip']['name'];
        $namaSementara = $_FILES['namaSakip']['tmp_name'];
        $ekstensi_diperbolehkan	= array('pdf','docx');
        $x = explode('.', $namaSakip1);
        $nama = strtolower($x['0']);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['namaSakip']['size'];
        $dateCreate = date("Y-m-d");
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($namaSementara, __DIR__.'/../../../assets/terupload/'.$namaSakip1);
            }
        }
        $data_test = array(       
            'namaSakip' =>$namaSakip1,
            'dateCreate' => $dateCreate
        );
        

        $this->model->create($data_test);
        return header("location:http://kesbangpol.com/sakip");
    }

    public function downloadBerkas(Request $request)
    {
        $idSakip = $request->attributes->get("id");

        $detail = $this->model->selectOne($idSakip);

        $filepath = __DIR__ ."/../../../assets/terupload/" .$detail['namaSakip'];

        if(file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'
                                        .basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
  
            // Flush system output buffer
            flush(); 
            readfile($filepath);
            die();
        } else {
            http_response_code(404);
            die();
        }
    }

    public function ReadOne(Request $request)
    {
        $id = $request->attributes->get('id');
        $datas = $this->model->selectOne($id);
        
        return $this->render_template('sakip/edit', ['idSakip' => $datas['idSakip'], 'namaSakip'=>$datas['namaSakip']]);
    }
    public function update(Request $request)
    {
        $id = $request->request->get('id');
        $namaSakip = $request->request->get('namaSakip');
        
        $id = $request->attributes->get('id');
        $data_test = array(
            'namaSakip' => $namaSakip
        );   
        
        $this->model->update($id, $data_test);
        
      return header("location:http://kesbangpol.com/sakip");
    }
    public function delete(Request $request)
    {
        $id = $request->attributes->get('id');
        $this->model->delete($id);


        return header("location:http://kesbangpol.com/sakip");
    }
}