<!DOCTYPE html>
<html>
  <head>
	<title>Password test, page 2</title>
  <head>


  <body>

	<?php 
		 $name  = $_POST['realname'];
		 $pass  = $_POST['mypassword']; 
		 
	  ?> 
  
  </body>
</html>
      
      <?php
require 'vendor/autoload.php';
$client=new MongoDB\Client;
$dummyydb=$client->dummyydb;
$dummycoll=$dummyydb->dummycoll;
$documentlist=$dummycoll->find(
['realname'=>$name,'mypassword'=>$pass]
);
$doc=null;
foreach($documentlist as $doc)
    
{
}
if($doc==null)
{
    printf("your login is not successfull");
}
else
{
    printf("your login is successfull");
}
      
?>