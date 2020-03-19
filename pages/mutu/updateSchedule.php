<?php

if(isset($_POST["eventform"])){

    $errors = array();
    $bytes = 1024;
    $allowedKB = 10000;
    $totalBytes = $allowedKB * $bytes;
    $minwidth=300;
    $minheight = 200;

    if($_POST["ld"]==""){$ld="Fermé";} else{$ld = $_POST["ld"];}
    if($_POST["lf"]==""){$lf="";} else{$lf = $_POST["lf"];}
    if($_POST["mad"]==""){$mad="Fermé";} else{$mad = $_POST["mad"];}
    if($_POST["maf"]==""){$maf="";} else{$maf = $_POST["maf"];}
    if($_POST["med"]==""){$med="Fermé";} else{$med = $_POST["med"];}
    if($_POST["mef"]==""){$mef="";} else{ $mef = $_POST["mef"];}
    if($_POST["jd"]==""){$jd="Fermé";} else{$jd = $_POST["jd"];}
    if($_POST["jf"]==""){$jf="";} else{$jf = $_POST["jf"];}
    if($_POST["vd"]==""){$vd="Fermé";} else{$vd = $_POST["vd"];}
    if($_POST["vf"]==""){$vf="";} else{ $vf = $_POST["vf"];}

    $myArr = array($ld,$lf,$mad ,$maf ,$med,$mef, $jd ,$jf ,$vd,$vf);
    $myJSON = json_encode($myArr, JSON_UNESCAPED_UNICODE);

    echo $myJSON;

    $fp = fopen('results.json', 'w');
    fwrite($fp, json_encode($myArr, JSON_UNESCAPED_UNICODE));
    fclose($fp);
}