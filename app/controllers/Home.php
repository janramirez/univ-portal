<?php

class Home extends Controller {

    public function index() {
        // echo "This is the Home Controller.";
        $user = new User;
        $arr['name'] = 'Fred';
        $arr['age'] = 65;

        $result = $user->insert($arr);

        show($result);

        $this->view('home');
    }
}
