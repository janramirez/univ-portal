<?php

defined('ROOTPATH') OR exit('Access denied!');

class Home {

    use Controller;

    public function index() {

        $data['username'] = empty($_SESSION['USER']) ? 'Guest' : $_SESSION['USER']->email;
        $this->view('home', $data);
    }

}
