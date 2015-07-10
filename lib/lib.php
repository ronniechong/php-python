<?php
    if ($_POST){
        $num            = $_POST["num"];
        $output         = `pi.py`  + $num;
        echo $output;
    }
?>