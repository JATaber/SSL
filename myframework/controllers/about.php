<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/18/18
 * Time: 10:45 AM
 */

class about extends AppController{

    public function __construct($parent){
        $this->menu= ["Home"=>"/welcome","Demo"=>"/welcome/demo2", "Form Demo"=>"/welcome/form", "Login"=>"/login", "About"=>"/about"];

        $this->parent = $parent;
        $this->showList();
    }

    public function showList(){

        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");

        $this->getView("header", array("pagename"=>"about"));
        $this->getView("navigation", $this->menu);
        $this->getView("about", $data);
        $this->getView("footer");
    }

    public function showAddForm(){
        $this->getView("header", array("pagename"=>"about"));
        $this->getView("navigation", $this->menu);
        $this->getView("addForm");
        $this->getView("footer");
    }

    public function addAction(){

        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values(:name)", array(":name"=>$_REQUEST["name"]));

        header("Location:/about");
    }

    public function delete(){

        print_r($_REQUEST);
    }

    public function edit(){
        print_r($_REQUEST);
        $this->getView("header", array("pagename"=>"about"));
        $this->getView("navigation", $this->menu);
        $this->getView("editForm");
        $this->getView("footer");

    }

    public function editAction(){

    }
}