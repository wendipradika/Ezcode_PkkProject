<?php
class Register extends Controller
{
    public function index(){
        $this->view('Register/index');
    }

    public function proses(){
        if($this->model('user_model')->register($_POST)> 0){
            header('location:'.BASEURL.'/login');
            exit;
        };
    }
}
