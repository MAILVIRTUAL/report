<?php
$comand   = $_GET ['com'];
if ($comand == '1')
{

$uploaddir = '/var/www/html/blog/pict/';

//@mkdir("/var/www/html/upload/id", 0777);
$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
$uploadklient = $_FILES['uploadfile']['name'];


   
   session_start();
   $comand   = $_GET ['com'];
   if ($comand == 'out')
   {
   $_SESSION['Login']   = "";
   $_SESSION['Password']= "";
   }  
   include_once("connect.php");
   $otvet = "";
   $utoch = "";
   $Obrashen = "";
   
   if ($_SESSION['Login'] <> '' and $_SESSION['Password'] <> '')
   {  
        //$userstable = "user";
        //mysql_select_db($dbName); 
        //$query = "SELECT * FROM $userstable WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
        //$res = mysql_query($query) ;  
        //while ($row=mysql_fetch_array($res)) 
        //{
           // $Obrashen = $row[FirstName]." ".$row[LastName];
        //}
        //echo $Obrashen;
    }
  
 


echo ('(1)');
echo ($_FILES['uploadfile']['tmp_name']);
echo ('(2)');
echo ($uploadfile);

echo ("(3)".$Obrashen);


$userstable = "user";
mysql_select_db($dbName) or die(mysql_error()); 
$query = "UPDATE user SET fotoklienta = '".$uploadklient."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";

echo ($query);
$res = mysql_query($query); 



if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile))
{
echo "<h3>OK</h3>";
}
else { echo "<h3>Error!</h3>"; exit; }

echo "<h3>Информация о загруженном на сервер файле: </h3>";
echo "<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']."</b></p>";
echo "<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']."</b></p>";
echo "<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']."</b></p>";
echo "<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Загрузка</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<form action=zagruzka.php?com=1 method=post enctype=multipart/form-data>
<input type=file name=uploadfile>
<input type=submit value=Загрузить></form>
