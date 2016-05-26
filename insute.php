                    
<?php


if ($_SESSION['Login'] <> '' and $_SESSION['Password'] <> '')
   {  
        $userstable = "user";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
            $Obrashen = $row[FirstName]." ".$row[LastName];
	    $fotoklienta = $row[fotoklienta];
        }
        //echo $Obrashen;
    }


   if ($Obrashen == "")
   {
?>

<li class="dropdown topbar-user"><a data-hover="dropdown" href="logo.php" class="dropdown-toggle"><img src="images/avatar/48.jpg" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">Войти или Регистрация</span>&nbsp;<span class="caret"></span></a>
</li>
<?php 
   }
   else
   {
       
       if ($fotoklienta == '')
       {
       	  $fotonapas = '/images/avatar/48.jpg'; 
       }
       else
       {
           $fotonapas = '/upload/'.$fotoklienta;            
       }
echo '<li class="dropdown topbar-user"><a data-hover="dropdown" href="proffile.php" class="dropdown-toggle"><img src="'.$fotonapas.'" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">'.$Obrashen.'</span>&nbsp;<span class="caret"></span></a>'
?>




                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="proffile.php"><i class="fa fa-user"></i>Профиль</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>Календарь</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>Почта<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>Задачи<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Блокировка</a></li>
                            <li><a href="?com=out"><i class="fa fa-key"></i>Выйти</a></li>
                        </ul>
                    </li>
<?php 
}
?>
