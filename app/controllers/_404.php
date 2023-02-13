<?php

class _404 {
    use Controller;

    public function index() {
        echo "This is the _404 Controller.";
        $this->view('404');
    }
}
