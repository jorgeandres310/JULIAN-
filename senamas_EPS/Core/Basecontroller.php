<?php

session_start();

class BaseController
{
    protected $layout;

    public function __construct()
    {
        require_once 'Connecting.php';
        require_once 'BaseModel.php';
        require_once 'models/Paciente.class.php';
        require_once 'models/Especialidad.class.php';
        require_once 'models/Doctor.class.php';
    }
    public function validaLetras($var)
    {
        $condicion = '/[a-z]{3,50}+$/i';

        $validacion = preg_match($condicion, $var);
        $validacion2 = preg_match($condicion, $var);
        $validacion3 = preg_match($condicion, $var);
        $validacion4 = preg_match($condicion, $var);
        $validacion5 = preg_match($condicion, $var);
        $validacion6 = preg_match($condicion, $var);
        $validacion7 = preg_match($condicion, $var);
        $validacion8 = preg_match($condicion, $var);
        $validacion9 = preg_match($condicion, $var);
        $validacion10 = preg_match($condicion, $var);
        $validacion11 = preg_match($condicion, $var);

        return $validacion & $validacion2 & $validacion3 & $validacion4 & $validacion5 & $validacion6 & $validacion7 & $validacion8 & $validacion9 & $validacion10 &  $validacion11;

    }
    public function validaUnaletra($var)
    {
        $condicion = '/^[a-z]{0,1}+$/i';

        $validacion16 = preg_match($condicion, $var);

        //return $validacion; 
    }
}
?>
