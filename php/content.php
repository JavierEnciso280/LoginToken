<?php
require_once '../config/conexion.php';

if(empty($_POST['usu_name']) && empty($_POST['usu_lastname']) && empty($_POST['usu_email']) && empty($_POST['usu_phone'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";

}else{
    if($_GET['module']=='start'){
        include "modules/inicio/index.php";
    }
}


?>