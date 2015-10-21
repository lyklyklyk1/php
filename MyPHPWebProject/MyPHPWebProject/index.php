<?php
$mydata = array(
    'id' => 1,
    'name '=> 'lyk'
);

try{
    $mongo = new MongoClient("mongodb://192.168.37.129:27017"); // 连接
    //$mongo = new MongoClient(); // 连接
}
catch(Exception $e)
{
    echo 'Message: ' .$e->getMessage();
}

$mongodb = $mongo->selectDB("test");
$colection = $mongodb->selectCollection("test");
$result = $colection->find();

var_dump(iterator_to_array($result));

?>