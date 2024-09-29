<?php
class Lagu_model
{
    private $table = 'lagu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllLagu()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getLaguById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
