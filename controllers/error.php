<?php
class Error extends Controller{
    function __construct(){
        parent::__construct();
      //  echo "<p>Error al cargar recurso</p>";
        $this->view ="error generico";
      $this->view->render('error/index');
    }
}
?>