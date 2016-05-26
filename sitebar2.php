                    <li class="active"><a href="index.php"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Главная</span></a></li>
                    <li><a href="email.php"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Документооборот</span></a>
                       
                    </li>



                    <li><a href="yrist2.php"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Юридические услуги</span></a>
                       
                    </li>
                    <li><a href="buh.php"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Бухгалтерские услуги</span></a>
                      
                    </li>
                    <li><a href="later.php"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Отправка бумажной почты</span></a>
                          
                    </li>



<?php 

   include_once("connect.php");
   $otvet = "";
   $utoch = "";
   $Obrashen = "";
   // Вход с предудущий сесии
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
            $idklienta = $row[id];
	    $prof       = $row[prof];
        }
        //echo $Obrashen;
    }


		if ($prof == "Администратор")
		{
                    echo '<li><a href="otchet.php"><i class="fa fa-sitemap fa-fw">';
                        echo '<div class="icon-bg bg-dark"></div>';
                    echo '</i><span class="menu-title">Отчет</span></a>';
		}
?>	






                    <li><a href="foto.php"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Фото</span></a>


                      
                    </li>
                    <li><a href="obyavlen.php"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Блоги,Объявления</span></a>
                       
                    </li>
                    <li><a href="ofirm.php"><i class="fa fa-gift fa-fw">
                        <div class="icon-bg bg-grey"></div>
                    </i><span class="menu-title">Наши достижения</span></a>
                      
                    </li>
                    <li><a href="karta.php"><i class="fa fa-sitemap fa-fw">
                        <div class="icon-bg bg-dark"></div>
                    </i><span class="menu-title">Карта сайта</span></a>
                      
                    </li>
                    <li><a href="kontakt.php"><i class="fa fa-envelope-o">
                        <div class="icon-bg bg-primary"></div>
                    </i><span class="menu-title">Контакты</span></a>
                      
                    </li>
                    <li><a href="utilit.php"><i class="fa fa-bar-chart-o fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Дополнительные услуги</span></a>
                       
                    </li>
                    <li><a href="programm.php"><i class="fa fa-slack fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Программное обеспечение</span></a></li>
                </ul>
