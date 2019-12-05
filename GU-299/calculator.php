<?php
        $fval = $_POST['fval'];
        $sval = $_POST['sval'];
        if($sval==0||$fval==0){
            die('infinity');
        }
        if(!($fval||$sval)){
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        }
        elseif(((double)$fval!=$fval)||((double)$sval!=$sval)){
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        }
        if($fval>$sval){
            echo 100*($fval/$sval).'%';
        }
        elseif ($fval<$sval){
            echo 100*($sval/$fval).'%';
        }
        else{
            echo '100%';
        }
?>
