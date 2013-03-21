<?php


class DocumentsController extends AppController {
    public $helpers = array('Html', 'Form');


    public function index() {
        $this->set('documents', $this->Document->find('all'));
    }

}

    

?>