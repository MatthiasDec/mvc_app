<?php

Class Login_model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function connect(){
        $stmt = $this->db->prepare("SELECT * FROM UTILISATEUR WHERE EMAIL = :email");
        $stmt->execute(array('email' => $_POST['login']));
        $data = $stmt->fetchAll();

        if($data[0]['PASSWORD'] == md5($_POST['password'])){
            echo 'gg';
        }
        else{
            echo 'raté';
        }
    }
}