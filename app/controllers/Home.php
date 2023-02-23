<?php

defined('ROOTPATH') OR exit('Access denied!');

class Home {

    use Controller;
    

    public function index() {

        $data['title'] = "the PORT";
        $data['username'] = empty($_SESSION['USER']) ? 'Pirate' : $_SESSION['USER']->email;

        // instantiate Service class
        $srvc = new Service;
        $services = $srvc->findAll();
        $data['services'] = [];

        // instantiate Category class
        $cat = new Category;
        $data['category'] = $cat->getAll();
        
        
        
        // map services to new array $s2 and merge with categories
        foreach ($services as $s)
        {            
            $s2['title'] = $s->title;
            $s2['desc'] = $s->description;
            $s2['url'] = $s->url;
            $s2['image'] = $s->image;
           
            $categories['categories'] = $cat->get($s->id);

            $data['services'][] = array_merge((array) $s,$categories);

            // array_push($data['services'],array_merge($s2,$categories));
        }
        // show($data);
        // die();
        $this->view('home', $data);
    }


}
