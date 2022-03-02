<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PenjualanController extends BaseController
{
    public function __construct(){
        $this->curl = \Config\Services::curlrequest();

        $this->viewPage = [
            'data'=>array(),
            'baseUrl'=>base_url(),
            'titlePage'=>'Penjualan',
            'locationPage'=>'pages/penjualan/index'      
        ];
    }

    public function index()
    {
        $this->viewPage['data'] = $this->get();
        return view($this->viewPage['locationPage'], $this->viewPage);
    }

    private function get(){
        $response = $this->curl->get("http://127.0.0.1:8000/api/penjualan", [
            "headers" => [
                "Accept" => "application/json",
                "Authorization"=>"Bearer ".session()->login_session['access_token']
            ]
        ]);
        $responseData = json_decode($response->getBody(),TRUE);
        return $responseData['data'];
    }

    public function post(){
        $idPelanggan = $this->request->getPost('id_pelanggan');
        $kodeBarang = $this->request->getPost('i_kode_barang');
        $qty = $this->request->getPost('i_qty');
        $subtotal = $this->request->getPost('i_subtotal');
        
        foreach ($kodeBarang as $key => $value) {
            $itemPenjualan[$key]['kode_barang'] = $value;
            $itemPenjualan[$key]['qty'] = $qty[$key];
        }
        $dataPost = [
            "kode_pelanggan" => $idPelanggan,
            "subtotal" =>$subtotal,
            "item_penjualan" => $itemPenjualan
        ];

        $response = $this->curl->post("http://127.0.0.1:8000/api/penjualan", [
            "headers" => [
                "Accept" => "application/json",
                "Authorization"=>"Bearer ".session()->login_session['access_token']
            ],
            "form_params" => $dataPost
        ]);

        return $this->index();
    }
}
