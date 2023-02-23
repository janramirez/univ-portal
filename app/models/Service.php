<?php

class Service 
{
    use Model;

    protected $table = 'services';

    public $res = [];

    protected $allowedColumns = [

        'name',
        'url',
        'icon_location',
        'description',
    ];

}
