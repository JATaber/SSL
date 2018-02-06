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
        $menu1 = array("button1"=>"/link1","button2"=>"/link2", "button3"=>"/link3");

        //loads other parts of the web application
        $this->getView("navigation", $menu1);
        $this->getView("welcome");
        $this->getView("footer");
    }
}

?>