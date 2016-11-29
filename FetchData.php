<?php
function GetDataFromFile()
{
    $data = array();
    $file = fopen("uploads/colors.txt", "r");
    $members = array();
    $i=0;
    while (!feof($file)) {
        $members[] = fgets($file);
        $key = explode(":",$members[$i])[0];
        $value = explode(":",$members[$i])[1];
        $item = array("key"=>trim($key),"value"=>trim($value));
        array_push($data, $item);
        $i++;
        //$item = "key"=>trim($key);
        //$data.push("abc");
    }
    fclose($file);
    return $data;
}
?>