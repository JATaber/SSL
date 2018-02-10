<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 12:07 PM
 */

class welcome extends AppController{

    public $menu;

    public function __construct($urlPathParts){

        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form Demo"=>"/welcome/form", "Login"=>"/login"];

        $url = get_object_vars($urlPathParts);

        //print_r($url["urlPathParts"]);
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

    public function form(){
        $this->getView("header", array("pagename"=>"Project: Form Demo"));
        $this->getView("navigation", $this->menu);
        $this->getView("form");
        $this->getView("footer");
    }

    public function formRecv(){
        $this->getView("header", array("pagename"=>"Project: Form Demo"));
        $this->getView("navigation", $this->menu);
        $this->getView("form", $_POST);

        $this->getView("footer");

        //echo $_POST["email"];

    }


}

?>