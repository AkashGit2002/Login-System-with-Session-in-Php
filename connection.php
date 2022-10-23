

<?php



$server='localhost';

$user='root';

$password='';

$db='sql_login';

$conn=mysqli_connect($server,$user,$password,$db);

if(!$conn){
  // die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
  echo "Connected";
}

?>
