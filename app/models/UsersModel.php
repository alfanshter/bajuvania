<?php

class UsersModel
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkusername($data)
    {
        $query = "SELECT * FROM users where username = :username";
        $this->db->query($query);
        $this->db->bind('username', $data['email']);
        return $this->db->single();
    }

    public function daftarCustomer($data)
    {

        $query = "INSERT INTO users (username,password,role)
        VALUES(:username,:password,:role)";
        $this->db->query($query);
        $this->db->bind('username', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role', 1);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function checklogin($data)
    {
        $query = "SELECT * FROM users where username = :username AND password = :password";
        $this->db->query($query);
        $this->db->bind('username', $data['email']);
        $this->db->bind('password', $data['password']);
        return $this->db->single();
    }
}
