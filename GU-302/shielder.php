<?php
    $table = str_split(trim($_POST['table']));
    $query = trim($_POST['query']);
    if(!($table||$query)){
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    }
    $query = explode(';',$query);
    foreach($query as $key=>$r){
        $query[$key] = str_split($r);
    }
    $arr = array();
    for($e = 0;$e<10;$e++){
        $arr[$e] = 1;
    }
    $q ='';
    $inf = '';
    $shielder = 0;
    foreach($query as $val) {
      foreach($val as $v){
            if($arr[$v]!=1){
                $shielder = 1;
                break;
            }
        }
    }

    foreach($table as $val){
        if($arr[$val]!=1){
            $shielder=1;
            break;
        }
    }

    $table = implode($table);
    foreach($query as $key=>$value){
        $str ='';
        foreach($value as $r){
            $str.=$r;
        }
        $query[$key] = $str;
    }

        if($shielder){
            foreach($query as $val){
                $inf.= "'$val',";
            }

            $inf = substr($inf,0,-1);
            echo "SELECT `$table` FROM ($inf)";
        }
        else{
            foreach($query as $val){
                $inf.= "$val,";
            }
            $inf = substr($inf,0,-1);
            echo "SELECT $table FROM ($inf)";
        }

?>

