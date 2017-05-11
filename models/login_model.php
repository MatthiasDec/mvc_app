<?php

Class Login_model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function connect(){
        $stmt = $this->db->prepare("SELECT * FROM UTILISATEUR WHERE EMAIL = :email");
        $stmt->execute(array('email' => $_POST['login']));

        if($stmt->rowCount()>0){
            $fetch = $stmt->fetchAll();
            $data = $fetch[0];
        }
        else{
            return false;
        }

        if($data['PASSWORD'] == md5($_POST['password'])){
            //Inside model or controller ?
            Session::set('user_id', $data['ID_UTILISATEUR']);
            Session::set('user_fname', $data['PRENOM']);
            Session::set('user_lname', $data['NOM']);
            Session::set('connected', true);
            return true;
        }
        else{
            return false;
        }
    }
}