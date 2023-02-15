<?php

class Service 
{
    use Model;

    protected $table = 'services';

    protected $allowedColumns = [

        'name',
        'url',
        'icon_location',
        'description',
    ];

}
