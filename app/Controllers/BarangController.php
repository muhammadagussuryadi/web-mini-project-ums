<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BarangController extends BaseController
{
    public function __construct(){
        $this->curl = \Config\Services::curlrequest();

        $this->viewPage = [
            'data'=>array(),
            'baseUrl'=>base_url(),
            'titlePage'=>'Barang',
            'locationPage'=>'pages/barang/index'      
        ];
    }

    public function index()
    {
        $this->viewPage['data'] = $this->get();
        return view($this->viewPage['locationPage'], $this->viewPage);
    }

    private function get(){
        $response = $this->curl->get("http://127.0.0.1:8000/api/barang", [
            "headers" => [
                "Accept" => "application/json",
                "Authorization"=>"Bearer ".session()->login_session['access_token']
            ]
        ]);
        $responseData = json_decode($response->getBody(),TRUE);
        return $responseData['data'];
    }

    public function getById($id){
        $response = $this->curl->get("http://127.0.0.1:8000/api/barang/".$id, [
            "headers" => [
                "Accept" => "application/json",
                "Authorization"=>"Bearer ".session()->login_session['access_token']
            ]
        ]);
        $responseData = json_decode($response->getBody(),TRUE);
        return json_encode($responseData);
    }

    public function post(){
        $nama = $this->request->getPost('nama');
        $kode = $this->request->getPost('kode');
        $kategori = $this->request->getPost('kategori');
        $harga = $this->request->getPost('harga');

        $dataPost = [
            "nama" => $nama,
            "kode" => $kode,
            "kategori" => $kategori,
            "harga" => $harga,
        ];

        if(!isset($kode)){
            unset($dataPost['kode']);
        }
        $response = $this->curl->post("http://127.0.0.1:8000/api/barang", [
            "headers" => [
                "Accept" => "application/json",
                "Authorization"=>"Bearer ".session()->login_session['access_token']
            ],
            "form_params" =>$dataPost
        ]);

        return $this->index();
    }

    public function delete($id){
        if($id){
            $response = $this->curl->delete("http://127.0.0.1:8000/api/barang/".$id, [
                "headers" => [
                    "Accept" => "application/json",
                    "Authorization"=>"Bearer ".session()->login_session['access_token']
                ]
            ]);
            $responseData = json_decode($response->getBody(),TRUE);
            if($responseData['statusCode'] == 200){
                echo json_encode(array('statusCode'=>200, 'message'=>'success'));
            }else{
                echo json_encode(array('statusCode'=>500, 'content'=>'failed'));
            }
        }else{
            echo json_encode(array('statusCode'=>500, 'content'=>'failed'));
        }
    }
}
