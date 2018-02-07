<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/7/18
 * Time: 1:50 AM
 */

class home extends AppController{


    public $menu;

    public function __construct()
    {
        $this->menu= ["Home"=>"/welcome","button2"=>"/welcome/link2", "button3"=>"/welcome/link3"];
    }

    public function index(){
        $this->getView("header", array("pagename"=>"Project: Demos"));
        $this->getView("navigation", $this->menu);
        $this->getView("demo2");
        $this->getView("footer");
    }
}