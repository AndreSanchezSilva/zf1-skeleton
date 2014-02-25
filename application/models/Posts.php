<?php

class Application_Model_Posts extends Application_Model_DbTable_Post
{
    public function getPosts() {
    	return $this->fetchAll();
    }

    public function getPost($id) {
    	return $this->find($id);
    }
}
