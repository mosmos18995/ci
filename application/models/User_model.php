<?php

class User_model extends CI_Model {

    public function getUser(){
        $query = "SELECT * FROM users";
        $users = $this->db->query($query);
        return $users;
    }
}