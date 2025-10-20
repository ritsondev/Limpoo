<?php

require_once("utils/exe.php");
require_once("utils/msg.php");
require_once("url.php");

$first_Name=filter_input(INPUT_POST,"first_Name");
$last_name=filter_input(INPUT_POST,"last_name");
$email=filter_input(INPUT_POST,"email");
$password=filter_input(INPUT_POST,"password");
$confirm_password=filter_input(INPUT_POST,"confirm_password");
$type=filter_input(INPUT_POST,"type");


if($type==="register"){



}else if($type==="login"){


}else{

     
   header("Location:utils/msg.php");

}

?>