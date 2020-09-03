<?php
class User_model
{
    public function __construct()
    {
        $this->db= new Database;
    }

    public function register($data){
        $nama = htmlspecialchars($data['nama']);
        $telepon = htmlspecialchars($data['telepon']);
        $alamat = htmlspecialchars($data['alamat']);
        $username = htmlspecialchars($data['username']);
        $password = md5($data['password']);
        $query = "INSERT INTO user VALUE ('','$nama','$telepon','$alamat','$username','$password')";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function login($data){
        $username = $data['username'];
        $password = md5($data['password']);

        $query = "SELECT * FROM user WHERE username = '$username' AND password ='$password'";
        $this->db->query($query);
        return $this->db->single();
    }
}