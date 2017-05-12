<?php

Class Login_model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function connect(){

        //Inside model or controller ?
        $stmt = $this->db->prepare("SELECT * FROM UTILISATEUR WHERE EMAIL = :email");

        if(isset($_POST['login'])){
            $stmt->execute(array('email' => $_POST['login']));
        }
        else{
            return false;
        }

        if($stmt->rowCount()>0){
            $fetch = $stmt->fetchAll();
            $data = $fetch[0];
            $stmt->closeCursor();
        }
        else{
            $stmt->closeCursor();
            return false;
        }

        if($data['PASSWORD'] == hash('sha256',$_POST['password'])){
            //Inside model or controller ?
            Session::set('user_id', $data['ID_UTILISATEUR']);
            Session::set('user_fname', $data['PRENOM']);
            Session::set('user_lname', $data['NOM']);
            Session::set('rank', $data['ADMIN']);
            Session::set('connected', true);
            return true;
        }
        else{
            return false;
        }
    }
}