<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/25/18
 * Time: 10:04 AM
 */

class api extends AppController{

    public function __construct($parent){

        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form Demo"=>"/welcome/form", "Login"=>"/login", "About"=>"/about/showList", "API"=>"/api/showApi"];
        $this->parent = $parent;
    }

    public function showApi(){

        $this->getView("header", array("pagename"=>"api"));
        $this->getView("navigation", $this->menu);

        //echo "<br><br><br><br>";
        $data = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");
        $this->getView("api", $data);

        $this->getView("footer");

    }

    public function showYouTube(){
        $this->getView("header", array("pagename"=>"api"));
        $this->getView("navigation", $this->menu);

        //echo "<br><br><br><br>";
        $data = $this->parent->getModel("apiModel")->youTube();
        $this->getView("youTube", $data);

        $this->getView("footer");
    }
}