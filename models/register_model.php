<?php

Class Register_model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function addUser(){

        if(!empty($_POST['lname']) && !empty($_POST['fname']) && !empty($_POST['mail']) && !empty($_POST['mailConfirm']) && !empty($_POST['pass']) && !empty($_POST['passConfirm'])){

            $user_fname = utf8_encode($_POST['fname']);
            $user_lname = utf8_encode($_POST['lname']);
            $mail = $_POST['mail'];
            $mailConfirm = $_POST['mailConfirm'];
            $pass = $_POST['pass'];
            $passConfirm = $_POST['passConfirm'];

            $verif = $this->db->prepare('SELECT EMAIL FROM UTILISATEUR WHERE EMAIL= :email');
            $verif->execute(array('email'=> $mail));
            $verif->closeCursor();

            if($verif->rowCount() > 0){
               return 0;
            }

            if(($mail == $mailConfirm) && ($pass == $passConfirm)){
                $pass = hash('sha256',$pass);
                $stmt = $this->db->prepare('INSERT INTO UTILISATEUR (NOM,PRENOM,EMAIL,PASSWORD) VALUES (:lname,:fname,:mail,:pass)');
                $stmt->execute(array('lname'=>$user_lname, 'fname'=>$user_fname, 'mail'=>$mail, 'pass'=>$pass));
                $stmt->closeCursor();
                return 1;
            }
            else{
                return 2;
            }
        }
        else{
            return 3;
        }
    }

}