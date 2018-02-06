<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 12:07 PM
 */

class welcome extends AppController{

    public function __construct(){

        //this loads the header of the application
        $this->getView("header", array("pagename"=>"welcome"));

        //the array of navigation elements to be passed to the navigation
        $menu = array("welcome"=>"/welcome","about"=>"/about", "profile"=>"/profile");

        //loads other parts of the web application
        $this->getView("navigation",$menu);
        $this->getView("welcome");
        $this->getView("footer");
    }
}

?>