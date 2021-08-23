<?php

namespace Core;

use App\Banner\Model\Banner;
use App\KontakDarurat\Model\KontakDarurat;
use App\Permissions\Model\RolePermissions;
use Config\Database;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class GlobalFunc
{
    public $conn;
    public $baseUrl;
    public $session;

    public function __construct()
    {
        $this->baseUrl = 'http://crt-framework.com/';
        $db = new Database();
        $this->conn = $db->conn;
    }

    public function beginSession()
    {
        if ($this->session == null || $this->session->isStarted() == false) {
            $this->session = new Session();
            $this->session->start();
        }
    }

    public function render_template($page, $data = [], $request = null)
    {
        if (!is_null($request)) {
            extract($request->attributes->all(), EXTR_SKIP);
        }

        global $requestUri, $site_url;

        $this->beginSession();

        $data['namaUser'] = !is_null($this->session) ? $this->session->get('namaUser') : null;
        $data['idOrsospol'] = !is_null($this->session) ? $this->session->get('idOrsospol') : null;
        $data['namaOrsospol'] = !is_null($this->session) ? $this->session->get('namaOrsospol') : null;
        $data['singkatanOrsospol'] = !is_null($this->session) ? $this->session->get('singkatanOrsospol') : null;
        $data['noAHU'] = !is_null($this->session) ? $this->session->get('noAHU') : null;
        $data['idJenisorsospol'] = !is_null($this->session) ? $this->session->get('idJenisorsospol') : null;
        $data['idRole'] = !is_null($this->session) ? $this->session->get('idRole') : null;
        $data['aliasRole'] = !is_null($this->session) ? $this->session->get('aliasRole') : null;

        $kontakdaruratModel = new KontakDarurat();
        $data['kontakDarurat'] = $kontakdaruratModel->selectAll();

        if ($data['idRole'] != null) {
            $rolepermissionsModel = new RolePermissions();
            $data['rolepermissions'] = $rolepermissionsModel->get($data['idRole']);
        } else {
            $data['rolepermissions'] = [];
        }

        $isPermited = function ($userpermissions, $permissions, $option = 'required-all') {
            $permissionAmount = count($permissions);
            $result = false;

            // option "required-all"
            if ($option == 'required-all') {
                foreach ($userpermissions as $key => $value) {
                    foreach ($permissions as $key1 => $value1) {
                        if ($value['aliasPermission'] == $value1) {
                            $permissionAmount--;
                        }
                    }
                }
                $result = $permissionAmount == 0 ? true : false;
            } else {
            // option "required-one"
                foreach ($userpermissions as $key => $value) {
                    if (in_array($value['aliasPermission'], $permissions)) {
                        $result = true;
                        break;
                    }
                }
            }

            return $result;
        };
        $data['isPermited'] = $isPermited;

        $banner = new Banner();
        $data_banner = $banner->selectAll();
        $list_banner = [];
        foreach ($data_banner as $key => $value) {
            if (in_array('sidebar-link-eksternal', explode(',', $value['halamanmunculBanner']))) {
                array_push($list_banner, $value);
            }
        }

        extract($data, EXTR_SKIP);

        ob_start();
        include sprintf(__DIR__ . '/../../src/pages/%s.php', $page);

        return new Response(ob_get_clean());
    }

    public function assets(Request $request)
    {
        $extension = $request->attributes->get('_format');
        $file = $request->attributes->get('path') . '.' . $extension;
        $pathFile = __DIR__ . '/../../src/assets/' . $file;

        if (!file_exists($pathFile)) {
            $response = new Response("File Not Found!");
            $response->headers->set('Content-Type', 'text/plain');
            return $response;
        }

        ob_start();
        include $pathFile;

        $response = new Response(ob_get_clean());

        $content_type = '';
        if ($extension == 'css') {
            $content_type = 'text/css';
        } else if ($extension == 'js') {
            $content_type = 'text/script';
        }

        $response->headers->set('Content-Type', $content_type);
        return $response;
    }

    public function dd(...$var)
    {
        foreach ($var as $key => $value) {
            dump($value);
        }
        die();
    }
}
