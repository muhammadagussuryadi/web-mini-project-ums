<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PelangganController extends BaseController
{
    public function __construct(){
        $this->curl = \Config\Services::curlrequest();

        $this->viewPage = [
            'data'=>array(),
            'baseUrl'=>base_url(),
            'titlePage'=>'Pelanggan',
            'locationPage'=>'pages/pelanggan/index'      
        ];
    }

    public function index()
    {
        $this->viewPage['data'] = $this->get();
        return view($this->viewPage['locationPage'], $this->viewPage);
    }

    private function get(){
        $response = $this->curl->get("http://127.0.0.1:8000/api/pelanggan", [
            "headers" => [
                "Accept" => "application/json",
                "Authorization"=>"Bearer ".session()->login_session['access_token']
            ]
        ]);
        $responseData = json_decode($response->getBody(),TRUE);
        return $responseData['data'];
    }

    public function getById($id){
        $response = $this->curl->get("http://127.0.0.1:8000/api/pelanggan/".$id, [
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
        $domisili = $this->request->getPost('domisili');
        $jenis_kelamin = $this->request->getPost('jenis_kelamin');
        $id_pelanggan = $this->request->getPost('id_pelanggan');

        $dataPost = [
            "nama" => $nama,
            "domisili" => $domisili,
            "jenis_kelamin" => $jenis_kelamin,
            "id_pelanggan" => $id_pelanggan,
        ];

        if(!isset($id_pelanggan)){
            unset($dataPost['id_pelanggan']);
        }

        $response = $this->curl->post("http://127.0.0.1:8000/api/pelanggan", [
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
            $response = $this->curl->delete("http://127.0.0.1:8000/api/pelanggan/".$id, [
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
