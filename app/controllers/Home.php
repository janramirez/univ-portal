<?php

defined('ROOTPATH') OR exit('Access denied!');

class Home {

    use Controller;

    public function index() {

        $data = [];
        $data['title'] = 'The PORT';
        $service = new Service;
        $category = new Category;

        $data['categories'] = $category->categories;
        $data['services'] = $service->findAll();

        $data['username'] = empty($_SESSION['USER']) ? 'Pirate' : $_SESSION['USER']->email;
        // show($service->findAll());
        $this->view('home', $data);
    }

}
