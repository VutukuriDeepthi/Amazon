<?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$dummyydb=$client->dummyydb;
$dummycoll=$dummyydb->dummycoll;
$insertManyResult=$dummycoll->insertMany([
    ['_id'=>'1','realname'=>'deepthi','mypassword'=>'deep'],
    ['_id'=>'2','realname'=>'sushma','mypassword'=>'sush'],
    ['_id'=>'3','realname'=>'divya','mypassword'=>'div2'],
    ['_id'=>'4','realname'=>'sahithi','mypassword'=>'sahi110']
    
]);
    printf("inserted %d documents",$insertManyResult->getInsertedCount());
?>