<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/12/18
 * Time: 4:54 PM
 */


class profile extends AppController{

    public function __construct()
    {
        if(@$_SESSION["loggedin"] && $_SESSION["loggedin"]==1){


        }else{
            header("Location:/welcome");
        }

    }

    public function index(){

        $this->getView("header", array("pagename"=>"welcome"));
        echo "This is a protected area";
    }
}