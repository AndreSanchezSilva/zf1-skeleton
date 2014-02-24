<?php

class ContatoController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function mapaAction(){
        $this->view->titulo = "Titulo do Mapa";
        $this->view->estado = $this->getParam("estado");
        $this->view->cidade = $this->getParam("cidade");
        
       // recuperando todos os valores
       // var_dump($this->getAllParams());
    }


}

