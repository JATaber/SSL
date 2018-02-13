<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/12/18
 * Time: 4:54 PM
 */


class auth extends AppController{

    public function __construct()
    {

    }

    //auth/login
    public function login(){

        if($_REQUEST["username"]=="mike@aol.com" && $_REQUEST["password"]=="password"){

            if($_REQUEST["username"]=="mike@aol.com" && $_REQUEST["password"]=="password"){

                $_SESSION["loggedin"] =1;
                header("Location:/welcome");


            }else{

                header("Location:/welcome?msg=Bad Login");
            }

        }else{

            header("Location:/welcome?msg=Bad Login");
        }
    }

    public function logout(){
        session_destroy();
        header("Location:/welcome");
    }
}