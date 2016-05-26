<?php 

   // Внесены изменения 16 Мая 2016 суббота
   // Добавлена информация в robots.txt
   // Добавлена информация на карту сайта (страничка сушествует).
   // Добавлена информация в отчет Админа		

   // ссылка для отображения
   if (isset($_GET ['id']))
   {	
   	$idhref = $_GET ['id'];
   }


   // Стандартный набор для всех страниц
   session_start();
   if ($comand == 'out')
   {
   $_SESSION['Login']   = "";
   $_SESSION['Password']= "";
   }  
   include_once("connect.php");
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
            $prof = $row[prof];
        }
    }  


//<!-- MailVirtual Analytics -->    
    $protokol = 'Анализ страницы';
    include_once("connect.php");
    $userstable = "protokol";
    mysql_select_db($dbName) or die(mysql_error()); 
    $ip=$_SERVER['REMOTE_ADDR'];
    if ($ip <> '79.140.23.35')
    {
    	$query = "INSERT INTO protokol (name,ip) VALUES ('".$protokol."','".$ip."')";
    	$res = mysql_query($query);  
    	if ($res == 'true')
    	{
      		//echo "Данные успешно обновлены.";
      		
    	}
    	else
    	{
      	//	echo "Данные не обновлены!";
    	}
    }     
//<!-- MailVirtual Analytics -->  


  
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Анализ страницы</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
</head>
<body>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
            <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
                data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
            <div class="content-theme-setting">
                <select id="list-style" class="form-control">
                    <option value="style1">Flat Squared style</option>
                    <option value="style2">Flat Rounded style</option>
                    <option value="style3" selected="selected">Flat Border style</option>
                </select>
            </div>
        </div>
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <?php include_once("logoup.php") ?>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <?php include_once("runstrok.php") ?>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-tasks fa-fw"></i><span class="badge badge-yellow">8</span></a>
                        
                    </li>
                    <?php include_once("insute.php") ?>
                    <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                &times;</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <?php include_once("sitebar2.php") ?>
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Желтые страницы интернет</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <a href="index.php">Желтые страницы</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Дополнительные услуги</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Информация о сайте</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                                
                            </div>

                            <div class="col-lg-12">
                            <div class="row">

				        

                    
                        <div class="panel panel-yellow">
                            <div class="panel-heading">Информация о сайте</div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Сайт</th>
                                        <th>Описание</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>


<?php
// Показываем страничку 
				$pornomer = 0; // Порядковый номер
				
				$hostname = "127.0.0.1";
			        $username = "izofen";
			        $password = "podkjf4";
			        $dbName   = "rusnet";
			        mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
			        mysql_query("SET NAMES 'utf-8'"); 
			        mysql_query("SET NAMES 'utf8'");
				$userstable = "site";
  				mysql_select_db($dbName); 
				$query = "SELECT * FROM $userstable WHERE id = '".$idhref."' ";
				$res = mysql_query($query) ;  
				while ($row=mysql_fetch_array($res)) 
  				{			        	
				$namerus  = $row[namerus];

				// ===== Записываем эту ссылку для дальнейшего полного анализа =====

				$userstable = "protokol";
  				mysql_select_db($dbName); 
				$queryin = "INSERT INTO protokol (namesite) VALUES ('".$namerus."')";
				$resin = mysql_query($queryin) ;

			    	//if ($res == 'true') { //echo "Данные успешно обновлены.";}
			    	//else { //echo "Данные не обновлены!" ;}

				//==================================================================


				$titlerus = $row[titlerus];
				$status   = $row[status];


				if ($status == '200') {$statustext = 'хорошо'; }
				if ($status == '302') {$statustext = 'перемещено навсегда'; }
				if ($status == '301') {$statustext = 'перемещено временно'; }

				$IP       = $row[ip_p80];

				$p1450    = $row[p1450]; 
				$ip_p1450 = $row[ip_p1450];

				$p445    = $row[p445]; 
				$ip_p445 = $row[ip_p445];



				$p80    = $row[p80]; 
				$ip_p80 = $row[ip_p80];


				$p21    = $row[p21]; 
				$ip_p21 = $row[ip_p21];


				$p3389    = $row[p3389]; 
				$ip_p3389 = $row[ip_p3389];


				$p23    = $row[p23]; 
				$ip_p23 = $row[ip_p23];

				$p3306    = $row[p3306]; 
				$ip_p3306 = $row[ip_p3306];

				$p3050    = $row[p3050]; 
				$ip_p3050 = $row[ip_p3050];


				$p22    = $row[p22]; 
				$ip_p22 = $row[ip_p22];


				}	

?>


                                    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>Ссылка</td>
					
                                        <td><a href="http://www.<?php echo ($namerus) ?>"><?php echo ($namerus) ?></a> </td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>Описание</td>
                                        <td><?php echo ($titlerus) ?></td>
                                        <td><span class="label label-sm label-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>Статус</td>
                                        <td><?php echo ($status).' ('.$statustext.')' ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				   <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>IP</td>
                                        <td><?php echo ($IP) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>



				    	<?php
				    	if ($p1450 <> '')
				    	{
				    	?>

				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>1С Предприятие 1450</td>
                                        <td><?php echo ($p1450) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>1С Предприятие 1450</td>
                                        <td><?php echo ($ip_p1450) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>				  

				    	<?php
				    	}
				    	?>



				    	<?php
				    	if ($p445 <> '')
				    	{
				    	?>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>Открытые папка p445</td>
                                        <td><?php echo ($p445) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>Открытые папка p445</td>
                                        <td><?php echo ($ip_p445) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    	<?php
				    	}
				    	?>






				    <?php
				    if ($p80 <> '')
				    {  
            if ($prof == 'Администратор')
            {  
					     $userstable = "site";
					     $total = 0;
  					   mysql_select_db($dbName); 
					     $query = "SELECT ip_p80  FROM $userstable WHERE ip_p80 = '".$ip_p80."' ";
					     $res = mysql_query($query) ;  
					     while ($row=mysql_fetch_array($res)) 
  					   {			        	
						        $total = $total + 1;
					     }				    	
				    ?>
				
  				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p80 HTML Статус</td>
                                        <td><?php echo ($p80) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p80 HTML IP </td>
                                        <td><?php echo ($ip_p80.' ( количество-'.$total.' сайтов на IP)'  ) ?></td>
                                        <td><span class="label label-sm label-danger">ПОДРОБНЕЕ</span></td>
                                    </tr>


				    <?php

					$userstable = "site";
  					mysql_select_db($dbName); 
					$query = "SELECT * FROM $userstable WHERE ip_p80 = '".$ip_p80."' ";
					$res = mysql_query($query) ;
					$pornomer2 = 0;   
					
					while ($row=mysql_fetch_array($res)) 
  					{			        	
						echo '<tr>';
						$pornomer2 = $pornomer2 +1;
	                                        echo '<td>'.$pornomer.'-'.$pornomer2.'</td>';
	                                        echo '<td>'.$row[namerus].'</td>';
        	                                echo '<td>'.$row[titlerus].'</td>';
        	                                echo '<td><span class="label label-sm label-danger"><a href="edit.php?id='.$row[id].'">сайт</a></span></td>';
        		                        echo '</tr>';
						// ===== Записываем эту ссылку для дальнейшего полного анализа =====
						$userstable = "protokol";
  						mysql_select_db($dbName); 
						$queryin = "INSERT INTO protokol (namesite) VALUES ('".$row[namerus]."')";
						$resin = mysql_query($queryin) ;
					    	//if ($res == 'true') { //echo "Данные успешно обновлены.";}
					    	//else { //echo "Данные не обновлены!" ;}	
						//==================================================================
					 }
				    }
            }   
				    ?>



				    <?php
				    if ($p21 <> '')
				    {
            if ($prof == 'Администратор')
            {

					$totalftp = 0;
					if ($ip_p21 <> '')
					{   
					$userstable = "site";					
  					mysql_select_db($dbName); 
					$query = "SELECT ip_p21  FROM $userstable WHERE ip_p21 = '".$ip_p21."' ";
					$res = mysql_query($query) ;  
					while ($row=mysql_fetch_array($res)) 
  					{			        	
						$totalftp = $totalftp + 1;
					}
	
					}
          }  




				    ?>


				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p21 FTP</td>
                                        <td><?php echo ($p21) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td>12 </td>
                                        <td>p21 FTP IP</td>
                                        <td><?php echo ($ip_p21.'( количество-'.$totalftp.' FTP на IP)'  ) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>

				    <?php
				    }
				    ?>




				    <?php
				    if ($p3389 <> '')
				    {
				    ?>

				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p3389</td>
                                        <td><?php echo ($p3389) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p3389</td>
                                        <td><?php echo ($ip_p3389) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <?php
				    }
				    ?>



				    <?php
				    if ($p23 <> '')
				    {
				    ?>

				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p23</td>
                                        <td><?php echo ($p23) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p23</td>
                                        <td><?php echo ($ip_p23) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>

				    <?php
				    }
				    ?>





				    <?php
				    if ($p3306 <> '')
				    {
				    ?>

				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p3306</td>
                                        <td><?php echo ($p3306) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p3306</td>
                                        <td><?php echo ($ip_p3306) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <?php
				    }
				    ?>




				    <?php
				    if ($p3050 <> '')
				    {
				    ?>

				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p3050</td>
                                        <td><?php echo ($p3050) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p3050</td>
                                        <td><?php echo ($ip_p3050) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <?php
				    }
				    ?>




				    <?php
				    if ($p22 <> '')
				    {
				    ?>

				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p22</td>
                                        <td><?php echo ($p22) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td><?php $pornomer = $pornomer +1; echo $pornomer;?></td>
                                        <td>p22</td>
                                        <td><?php echo ($ip_p22) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>

				    <?php
				    }
				    ?>


<?php
        
				$userstable = "analiz";
  				mysql_select_db($dbName); 
				$query = "SELECT * FROM $userstable WHERE namesite = '".$namerus."' ";
				$res = mysql_query($query) ;  
				while ($row=mysql_fetch_array($res)) 
  				{			        	

				    echo '<tr>';
					$pornomer = $pornomer +1; 
                                        echo '<td>'.$pornomer.'</td>';
                                        echo '<td>'.$row[metka].'</td>';
                                        echo '<td>'.$row[text].'</td>';
                                        echo '<td><span class="label label-sm label-danger">Blocked</span></td>';
                                    echo '</tr>';
				}
       
?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                   
                     </div>
                        </div>
                    </div>
                </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
