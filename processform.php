<?php

// print_r($_POST)


if(isset($_POST['save']))
{
$data=$_POST['firstname'];
$data=$_POST['Message'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}



?>