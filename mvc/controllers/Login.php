<?php
require_once "mvc/utility/utility.php";

class Login extends Controller{

    public $UserModel;

    public function __construct(){
        $this->UserModel = $this->model("UserModel");
    }

    public function SayHi(){
        $this->view("login", []);
    }

    public function UserLogin() {

        if( isset($_POST["btnLogin"]) ) {
            // get data
            $email = getPost('email');
            $password = getPost('password');
            $password = getSecurityMD5($password);
           
            
            $res = $this->UserModel->accountIdentify($email, $password);
     
            // show home
           
            if($res["result"]) {
                if($res["role_id"] == 1) {
                    header('Location: http://localhost/bkstore/Home');

                }
                else {
                    header('Location: http://localhost/bkstore/admin');
                }
            }
            else {
                header('Location: http://localhost/bkstore/Login');
            }

        }
    }

    public function UserLogout() {
        $user = getUserToken();
        if($user != null) {
            $token = getCookie('token');
            $id = $user['id'];
            $this->UserModel->deleteToken($id, $token);
            setcookie('token', '', time() - 100, '/');
        }
        session_destroy();
        header('Location: http://localhost/bkstore/Home');
    }
}

?>