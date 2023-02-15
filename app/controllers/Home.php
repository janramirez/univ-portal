<?php

defined('ROOTPATH') OR exit('Access denied!');

class Home {

    use Controller;

    public function index() {

        $data = [];
        $service = new Service;

        $data['rows'] = $service->findAll();

        $data['username'] = empty($_SESSION['USER']) ? 'Guest' : $_SESSION['USER']->email;
        show($data);
        $this->view('home', $data);
    }

}
