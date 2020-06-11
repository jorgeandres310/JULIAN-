<?php
class loginController extends BaseController
{
    public function __contruct(){
        parent::__construct();
        $this->layout="login_layout.php";
    }
    public function initLogin(){
        $current_view = 'views/login/loginView.php';
        if(isset($_POST['txtUser'])&& isset($_POST['txtPassword'])&& isset($_POST['txtSelect'])){
            $user = isset($_POST['txtUser']) ? trim($_POST['txtUser']):"";
            $password = isset($_POST['txtPassword']) ? trim($_POST['txtSelect']):"";
            $tipo = isset($_POST['txtSelect']) ? trim($_POST['txtSelect']):"";
            $errors="";

            if ($user == ''|| $password==""){
                $errors ="El usauario y la contraseña no pueden ir vacios";
                require_once 'views/layout/'. $this->layout;
            }else{
                if($tipo == "Administrador"){
                    $_SESSION['tipo_usuario']="admin";
                    $_SESSION['nombre'] = "Jorge";
                    $_SESSION['correo'] ="jorgeandresloaizagomez@gmail.com";
                    $_SESSION['contraseña'] = "12345";
                    if ($user == "jorgeandresloaizagomez@gmail.com" && $password =="12345"){
                        header("Location:index.php?controller-Especialida&action-index");
                    }else{
                        $errors = "El usuario o contraseña son incorrectos";
                        require_once 'views/layout/'.$this->layout;
                    }
                }
                else if($tipo == "Paciente"){
                    $pacient = new Paciente();
                    $pacient->setEmail($user);
                    $pacient->setPassword($password);
                    if ($pacient->validarLogin()){
                        header("Location:index.php?controller-Paciente&action-index");
                    }else{
                        $errors = "El usuario o contraseña son incorrectos";
                        require_once 'views/layout/'.$this->layout;
                    }
                }
            }
        }else{
            $errors = "Seleccione ningun usuario";
            require_once 'views/layout/'.$this->layout;
        }
    }
    public function error($code=0){
        $codeMessage = isset($_GET['msg'])?$_GET['msg']:$code;
        $message = "";
        switch ($codeMessage){
        }
    }
}
?>
