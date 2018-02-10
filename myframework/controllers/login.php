<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/7/18
 * Time: 1:50 AM
 */

class login extends AppController{


    public $menu;

    public function __construct()
    {
        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form Demo"=>"/welcome/form", "Login"=>"/login"];
    }

    public function index(){
        $this->getView("header", array("pagename"=>"Project: Login"));
        $this->getView("navigation", $this->menu);
        $this->getView("login");
        $this->getView("footer");
    }

    public function ajaxPars(){

        //var_dump($_REQUEST);

        if(@$_REQUEST["email"] == "mike@aol.com") {
            echo "welcome";
        }else{
            echo "bad login";
        }
    }
}