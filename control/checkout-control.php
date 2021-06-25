<?php
$produk = array();
$produk=$_GET ["produk"];
$value=$_GET ["value"];

for($x=0;$x<count($value);$x++){
    if($value[$x]!=0){
        echo ($produk[$x]);
        echo "";
        echo ($value[$x]);
        echo "<br>";
    }
}