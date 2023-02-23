<?php

class Category 
{
    use Model;

    protected $table = 'categories';
    
    protected $allowedColumns = [

        'title',
        'description',
        'image',
    ];

    protected $junction_table = "service_category";
    private $stmt = null;
    public $error = "";


    private function queryCategory($sql, $data=[])
    {
        $con = $this->connect();
        $this->stmt = $con->prepare($sql);

        $this->stmt->execute($data);
    }

    public function get($id)
    {

        $sql = "SELECT c.title AS Category FROM $this->table c INNER JOIN $this->junction_table sc ON c.id = sc.category INNER JOIN services s ON s.id = sc.service WHERE s.id = $id ORDER BY s.title ASC";

        $queryResult = $this->queryCategory($sql);
        
        $categories = [];
        while ($cat = $this->stmt->fetchColumn()) {
            $categories[] = $cat;
        }
        return $categories;
    }

    public function getAll()
    {
        $query = "SELECT c.title AS Category FROM $this->table c";
        // show($query);

        return $this->query($query);
    }

}
