<?php

class PostController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        
        // action body
        $modelPost = new Application_Model_Posts();
        //print_r($modelPost->getPost(1));
        $this->view->posts = $modelPost->getPosts();
    }
    
    public function mostrarAction(){
       
        
       // recuperando todos os valores
       // var_dump($this->getAllParams());
    }


}

