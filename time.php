 <?php 

 require_once('db.php');
 require_once('functions.php');

$time = current_time($db);
echo $time[0];


?>
