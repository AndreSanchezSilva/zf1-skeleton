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
        $modelPost = new Application_Model_Posts();
        $this->view->posts = $modelPost->getPost($this->getParam('id'));
        print_r($this->view->posts->toArray());        
       // recuperando todos os valores
       // var_dump($this->getAllParams());
    }


}

