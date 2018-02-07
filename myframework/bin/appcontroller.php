<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/4/18
 * Time: 11:42 AM
 */

class AppController{

    public function __construct($urlPathParts, $config)
    {

        //db information

        //might have to move this?


        $this->urlPathParts = $urlPathParts;

        //http://127.0.0.1/welcome
        if($urlPathParts[0]){

            include './controllers/'.$urlPathParts[0].".php";

            $appcon = new $urlPathParts[0]($this);

            //http://127.0.0.1/welcome/contact
            if(isset($urlPathParts[1])){

                $appcon->$urlPathParts[1]();
            }else{

                // if there is a default method insdie this controller (index)
                $methodVariable = array($appcon, 'index');
                if(is_callable($methodVariable, false, $callable_name)){

                    $appcon->index($this);
                }
            }

        } else{

            include './controllers/'.$config["defaultController"].".php";

            $appcon = new $config["defaultController"]($this);

            if(isset($urlPathParts[1])){

                $appcon->$config["defaultController"][1]();
            }else{
                $methodVariable = array($appcon, 'index');
                if(is_callable($methodVariable, false, $callable_name)){

                    $appcon->index($this);
                }
            }
        }
    }

    public function getView($page, $data=array()){

        require_once './views/'.$page.".php";
    }

    public function getModel(){

        //add this later
        // get then pass data to that page(view)
    }
}

?>