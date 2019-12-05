<?php
    $fval = $_POST['fval'];
    $sval = $_POST['sval'];
    if(!is_numeric($fval)||!is_numeric($sval)){
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        die();
    }
    $action = $_POST['action'];
    if($sval&&!(double)$sval){
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        die();
    }
        if($fval&&!(double)$fval){
            header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
            die();
        }
        switch($action){
            case 'addition':
                echo $fval+$sval;
                break;
            case'difference':
                echo $fval-$sval;
                break;
            case 'division':
                if($sval==0){
                    echo 'infinity';
                    break;
                }
                echo $fval/$sval;
                break;
            case 'multi':
                echo $fval*$sval;
                break;

        }

?>
