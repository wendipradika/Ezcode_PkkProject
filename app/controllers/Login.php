<?php
class Login extends Controller
{
    public function index(){
        $this->view('login/index');
    }
    public function prosesLogin(){
        $user = $this->model("User_model")->login($_POST);
        if($user != NULL){
            $_SESSION['status'] = "login";
            header('location:'.BASEURL.'/home');
            exit;
        }else{
            header('location:'.BASEURL);
            exit;
        }
    }
}
