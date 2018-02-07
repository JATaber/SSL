
<nav>
<?php
/**
 * Created by PhpStorm.
 * User: jamestaber
 * Date: 2/5/18
 * Time: 9:43 PM
 */
$arr = get_defined_vars();
//var_dump($arr);

//echo $arr['data'];

foreach($arr["data"] as $key=>$value){


    //echo $key.' '.$value;
    echo '<a href="'.$value.'">'.$key.'</a>';

}


?>
</nav>
