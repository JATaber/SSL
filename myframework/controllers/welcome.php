<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 12:07 PM
 */

class welcome extends AppController{

    public $menu;

    public function __construct(){

        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Login"=>"/demo2"];

    }


    public function index(){

        //this loads the header of the application
        $this->getView("header", array("pagename"=>"Project: welcome"));
        $this->getView("navigation", $this->menu);
        $this->getView("welcome");
        $this->getView("footer");
    }


    public function demo2(){
        $this->getView("header", array("pagename"=>"Project: Demo 2"));
        $this->getView("navigation", $this->menu);
        $this->getView("demo2");
        $this->getView("footer");

    }
    //third party index
}

?>