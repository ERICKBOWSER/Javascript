<?php
    $param1 = $_REQUEST["usuario"]
    $param2 = $_REQUEST["pass"]

    if(isset($param1 == "admin" && $param2 == "1234")){
        echo "<p>USUARIO VÁLIDO</p>";
    }else{
        echo "<p>USUARIO NO VÁLIDO</p>";
    }


?>