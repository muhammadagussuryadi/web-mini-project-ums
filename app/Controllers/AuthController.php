<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct(){
        $this->curl = \Config\Services::curlrequest();
    }
    public function index()
    {
        if(session()->login_session['access_token']){
            return redirect()->to(base_url('/dashboard'));
        }
        return view('login');
    }
    public function post(){
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        if($email && $password){
            $response = $this->curl->post("http://127.0.0.1:8000/api/auth/login", [
                "headers" => [
                    "Accept" => "application/json"
                ],
                "form_params" =>[
                    "email" => $email,
                    "password" => $password
                ]
            ]);
            $responseData = json_decode($response->getBody(),TRUE);
            if($responseData['statusCode'] == 200){
                session()->set('login_session',$responseData['data']);
                return redirect()->to(base_url('/dashboard'));
            }else{
                return $this->index();
            }
        }
    }

    public function logout(){
        session()->destroy();
        clearstatcache();
        return redirect()->to(base_url('/login'));
    }
}
