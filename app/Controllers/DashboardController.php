<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct(){
        $this->curl = \Config\Services::curlrequest();

        $this->viewPage = [
            'data'=>array(),
            'baseUrl'=>base_url(),
            'titlePage'=>'Dashboard',
            'locationPage'=>'pages/dashboard/index'      
        ];
    }

    public function index()
    {
        return view($this->viewPage['locationPage'], $this->viewPage);
    }
}
