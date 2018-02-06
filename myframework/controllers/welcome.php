<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 12:07 PM
 */

class welcome extends AppController{

    public function __construct(){

        $this->getView("header", array("pagename"=>"welcome"));

        $this->getView("welcome");
    }
}

?>