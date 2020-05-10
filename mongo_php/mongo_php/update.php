<?php 

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$up=new \MongoDB\Driver\BulkWrite;


$up->update(['nome'=>'Juliana'],['$set'=>['nome'=>'Juliana Salton']]);

$manager->executeBulkWrite('raiz.academicos',$up);