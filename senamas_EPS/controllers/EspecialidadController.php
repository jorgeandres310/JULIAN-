<?php
class EspecialidadController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

    //echo "Se mustra listado de especialidades";
    
    $especialidad_obj = new Especialidad();
    $allEspecialidad = $especialidad_obj->getAll();

    require_once 'views/especialidad/indexView.php';
    }
    public function view(){
        echo "Visualizar especialidad especifica";
    }
    public function create()
    {
        require_once 'views/especialidad/index.php';
    }
    public function save()
    {
        echo "Recibe los datos del formulario para guardar en B.D.";
    }
    public function edit(){
        echo "Muestra formulario con los datos precargados de la especialidad";
    }
    public function update(){
        echo "Recibe los datos de formulario para actualiar registro en B.D.";
    }
    public function delete(){
        echo "Elimina una especialidad especifica";
    }
}