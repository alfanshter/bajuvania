<?php

class SliderModel
{

    private $table = 'slider';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSlider()
    {
        $query = "SELECT * FROM slider";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
