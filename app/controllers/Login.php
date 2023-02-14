<?php

class Login {

    use Controller;

    public function index() {

        $data = [];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $arr['email'] = $_POST['email'];

            $user = new User;
            $row = $user->first($arr);

            if($row) {
                if($row->password === $_POST['password']) {

                    $_SESSION['USER'] = $row;
                    redirect('home');
                }
            }
            
            $user->errors['email'] = "Invalid email and/or password";

            $data['errors'] = $user->errors;
        }

        $this->view('login', $data);
    }

}
