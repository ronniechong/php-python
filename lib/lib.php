<?php
    if ($_POST){
        $num            = $_POST["num"];
        $output         = `python pi.py $num`;
        echo $output;
    }
?>