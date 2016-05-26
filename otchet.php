<?php 
   // Стандартный набор для всех страниц
   include_once("mainstart.php");
   
   
   
   
   //echo $rolereturn;
   
  
   $qvest   = $_GET ['qvest'];
   $tema   = $_GET  ['tema'];
   if (isset($_GET['qvest']))
   {

     mysql_select_db($dbName) or die(mysql_error()); 
     $query = "INSERT INTO yrvopros (title,opis) VALUES ('".$tema."','".$qvest."')";
     $res = mysql_query($query);
     //echo ($query);
     if ($res == 'true')
     {
      //echo "Данные успешно обновлены.";
      $metkahorvop = "yes";
     }
     else
     {
     //echo "Данные не обновлены!";
     }     
   }



   $ftitle = $_SESSION['ftitle'];
   if ($ftitle == '')
   {
	$ftitle = '%';
   }
   else
   {
   $ftitle = '%'.$ftitle.'%';
   }

   if (isset($_GET ['pov']))
   {	
   	$pov = $_GET ['pov'];    
    $query = "UPDATE `user` SET metkaready = 1 WHERE id = ".$pov." ";
    //echo $query;        
    $res = mysql_query($query) ;
    if ($res == 'true')
     {
      //echo "Данные успешно обновлены.";
      $metkahorvop = "yes";
     }
     else
     {
     //echo "Данные не обновлены!";
     }     
   }
   

   if (isset($_GET ['sim']))
   {	
   	$sim = $_GET ['sim'];
   }
   else
   {
   $sim     = "";
   }

   if (isset($_POST ['poisk']))
   {	
   	$poisk = $_POST ['poisk'];
        $sim = $poisk;
   }

    



   if (isset($_GET ['m']))
   {	
   	$m = $_GET ['m'];
        $max = $m*100;
        $min = $max - 100;

   }
   else
   {
   $m       = 1;  
   $max     = 100;
   $min	    = 0;
   }





   $otvet = "";
   $utoch = "";
   
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Отчет администратора</title>
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


  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
    <div>
        <!--BEGIN THEME SETTING-->
        <div id="theme-setting">
            <a href="#" data-toggle="dropdown" data-step="1" data-intro="&lt;b&gt;Many styles&lt;/b&gt; and &lt;b&gt;colors&lt;/b&gt; be created for you. Let choose one and enjoy it!"
                data-position="left" class="btn-theme-setting"><i class="fa fa-cog"></i></a>
            <div class="content-theme-setting">
                <select id="list-style" class="form-control">
                    <option value="style1">Желтый стиль</option>
                    <option value="style2">Красный стиль</option>
                    <option value="style3" selected="selected">Синий стиль</option>
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
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Поиск..." class="form-control text-white"/></div>
                </form>
                <?php include_once("runstrok.php") ?>
                
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-bell fa-fw"></i><span class="badge badge-green">3</span></a>
                        
                    </li>
                    <li class="dropdown"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-envelope fa-fw"></i><span class="badge badge-orange">7</span></a>
                        
                    </li>
                    
                   
                    <li id="topbar-chat" class="hidden-xs"><a href="javascript:void(0)" data-step="4" data-intro="&lt;b&gt;Form chat&lt;/b&gt; keep you connecting with other coworker" data-position="left" class="btn-chat"><i class="fa fa-comments"></i><span class="badge badge-info">3</span></a></li>
                    <?php include_once("insute.php") ?>
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
                            Отчет администратора</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Отчет администратора</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Отчет Администратора</li>
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

				         
					
					<BR>
          
          
              <?php
              // Проверка доступа к странице
              $roleId   = $idKlienta;
              $rolePrav = "ReadReport";
              $rolereturn = "";
              include_once("mainsecurity.php");
              if ($rolereturn == "Yes") 
              { 
              ?>
               
               
                
          
          			<div class="panel panel-blue" style="background:#FFF;">
                            <div class="panel-heading">Общие вопросы сайта</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Название</th>
                                        <th>Степень</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Приток новых клиентов</td>
                                        <td><?php echo ($rolereturn) ?></td>
                                        <td><span class="label label-sm label-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Сейчас пользователей на сайте</td>
                                        <td><?php echo ($rolereturn) ?></td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>------------------------</td>
                                        <td><?php echo ($rolereturn) ?></td>
                                        <td><span class="label label-sm label-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>------------------------</td>
                                        <td><?php echo ($rolereturn) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                 

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>5</th>
                                        <th><i>Итого</i></th>
                                        <th>100</th>
                                        <th><i>1 Approved</i></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
          
          
                     <?php
                     // Закрытие проверки доступа к странице 
                     } 
                     ?>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          			
                    
                        <div class="panel panel-yellow">
                            <div class="panel-heading"> Пользователи сайта</div>
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

				
				

			       
				include_once("connect.php");
				$userstable = "user";
  				mysql_select_db($dbName); 
				$nomer = 0;
	  			$query = "SELECT * FROM $userstable WHERE 1=1";
				$res = mysql_query($query) ;  
				while ($row=mysql_fetch_array($res)) 
  				{
				 echo '<tr>';
                                        $nomer = $nomer + 1;
                                        echo '<td>'.$nomer.'</td>';
                                        echo '<td>'.$row[FirstName].' '.$row[LastName].'</td>';
                                        echo '<td>'.$row[prof].'</td>';
                          $error = 'NO';
                          
                          // Кусок кода  для проверки на работоспособность новых пользователей
                          if ($row[prof] == '')
                          {
                            $error = 'ПРОФ';                          
                          }
                          
                          if ($row[datareg] == '0000-00-00')
                          {
                            $error = 'РЕГЕСТ';
                          }
                          
                          
                          
                                                      
                          if ($row[metkaready] == 0 )
                          {
                           echo '<td><span class="label label-sm label-warning"><a href="otchet.php?pov='.$row[id].'">Проверить</a></span></td>';
                          }
                          else
                          { 
                          if ($error == 'NO')
                          {               
                          echo '<td><span class="label label-sm label-success"><a href="proffile.php?sisadmin='.$row[id].'">ПОДРОБНЕЕ...</a></span></td>';
                          }
                          else
                          {
                          echo '<td><span class="label label-sm label-danger"><a href="proffile.php?sisadmin='.$row[id].'">ОШИБКА ('.$error.')</a></span></td>';
                          }                            
                          }
                                 echo '</tr>';
				}	

?>

                                    </tbody>
                                </table>



                            </div>
                        </div>
                        
                   
     
      

<?php

				$hostname = "127.0.0.1";
			        $username = "izofen";
			        $password = "podkjf4";
			        $dbName   = "mailvirtual";
			        mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
			        mysql_query("SET NAMES 'utf-8'"); 
			        mysql_query("SET NAMES 'utf8'");


				$userstable = "otchet";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1 ORDER BY id";
				$res = mysql_query($query) ;  
                                $nomer = 0;	

				$findrecord = 0;
				$oldfindrecord = 0;

			
				while ($row=mysql_fetch_array($res)) 
  				{
  					
  					
                                	if ($row[tip] == 'Титле 2 необработано') 
					{
                                		$TitleClear = $row[rez];
					}
                                	if ($row[tip] == 'Титле 2 обработано') 
					{
                                		$TitleFull = $row[rez];
					}
                                	if ($row[tip] == 'Титле 2 не найдено') 
					{
                                		$TitleNoFind = $row[rez];
					}
  					
  					
  					
  					
                                	if ($row[tip] == 'Всего записей') 
					{
                                		$allrecord = $row[rez];
					}


					if ($row[tip] == 'Сайтов не найдено') 
					{
                                		$nofindrecord = $row[rez];
					}


					if ($row[tip] == 'Не обработано записей') 
					{
                                		$noworkrecord = $row[rez];
					}	

					if ($row[tip] == 'Сайтов найдено в инете') 
					{
						$oldfindrecord = $findrecord;                                		
						$findrecord = $row[rez];
						$rezfindrecord = $findrecord - $oldfindrecord;
							
					}	


					if ($row[tip] == 'FTP обработано') 
					{
                                		$FTPworkrecord = $row[rez];
					}	
					if ($row[tip] == 'FTP найдено в инете') 
					{
                                		$FTPfindrecord = $row[rez];
					}	
					if ($row[tip] == 'FTP не обработано') 
					{
                                		$FTPnoworkrecord = $row[rez];
					}



					if ($row[tip] == '1C обработано') 
					{
                                		$S1cworkrecord = $row[rez];
					}	
					if ($row[tip] == '1C найдено в инете') 
					{
                                		$S1cfindrecord = $row[rez];

					}	
					if ($row[tip] == '1C не обработано') 
					{
                                		$S1cnoworkrecord = $row[rez];
					}


					if ($row[tip] == 'HTML не обработано') 
					{
                                		$HTMLnoworkrecord = $row[rez];            
					}	
					if ($row[tip] == 'HTML найдено в инете') 
					{
                                		$HTMLfindrecord = $row[rez];
					}	
					if ($row[tip] == 'HTML обработано') 
					{
                                		$HTMLworkrecord = $row[rez];
					}




					if ($row[tip] == 'Уникальных FTP') 
					{
                                		$FTPunikal = $row[rez];
					}	

					if ($row[tip] == 'Уникальных 1C') 
					{
                                		$S1cunikal = $row[rez];
					}




				}	

?>




			  <div class="panel panel-green">
                            <div class="panel-heading">Отчет по поиску сайтов</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Всего сайтов в базе</td>
                                        <td><?php echo (number_format($allrecord)) ?> </td>
                                        <td><span class="label label-sm label-success">Approved</span></td>
                                    </tr>
                                    
                                    
                                    
                    			 
					 
				   
				     
				   
	 
					                
                                    
                                    
                                    
                                    <tr>
                                        <td>2</td>
                                        <td>Титле 2 необработано</td>
                                        <td><?php echo (number_format($TitleClear)) ?></td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Титле 2 обработано</td>
                                        <td><?php echo (number_format($TitleFull)) ?></td>
                                        <td><span class="label label-sm label-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Титле 2 не найдено</td>
                                        <td><?php echo (number_format($TitleNoFind)).' (+'.number_format($rezfindrecord).')' ?>  </td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <tr>
                                        <td>2</td>
                                        <td>Не найдено сайтов</td>
                                        <td><?php echo (number_format($nofindrecord)) ?></td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Не обработано записей</td>
                                        <td><?php echo (number_format($noworkrecord)) ?></td>
                                        <td><span class="label label-sm label-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Найдено сайтов в инете </td>
                                        <td><?php echo (number_format($findrecord)).' (+'.number_format($rezfindrecord).')' ?>  </td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>


                                    <tr>
                                        <td>5</td>
                                        <td>FTP обработано</td>
                                        <td><?php echo (number_format($FTPworkrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>FTP найдено в инете</td>
                                        <td><?php echo (number_format($FTPfindrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>FTP не обработано</td>
                                        <td><?php echo (number_format($FTPnoworkrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>


                                    <tr>
                                        <td>8</td>
                                        <td>1C обработано</td>
                                        <td><?php echo (number_format($S1cworkrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>1C найдено в инете</td>
                                        <td><?php echo (number_format($S1cfindrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>1C  не обработано</td>
                                        <td><?php echo (number_format($S1cnoworkrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>








				    <tr>
                                        <td>11</td>
                                        <td>HTML не обработано</td>
                                        <td><?php echo (number_format($HTMLnoworkrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>HTML найдено в инете</td>
                                        <td><?php echo (number_format($HTMLfindrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>HTML обработано</td>
                                        <td><?php echo (number_format($HTMLworkrecord)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>











                                    <tr>
                                        <td>14</td>
                                        <td>Уникальных FTP</td>
                                        <td><?php echo (number_format($FTPunikal)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>



   				    <tr>
                                        <td>15</td>
                                        <td>Уникальных 1C</td>
                                        <td><?php echo (number_format($S1cunikal)) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>




			<div class="panel panel-orange">
                            <div class="panel-heading">Заполнение сайта информацией</div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
				$kodsum = 0;				
				$userstable = "yrdocall";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				    $kodsum = $kodsum + 1;
				}
?>

                                    <tr>
                                        <td>1</td>
                                        <td>Собрано юридических документов</td>
                                        <td><?php echo ($kodsum) ?></td>
                                        <td><span class="label label-sm label-success">Approved</span></td>
                                    </tr>
<?php
				$kodsum = 0;				
				$userstable = "buhdokumklient";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				    $kodsum = $kodsum + 1;
				}
?>

                                    <tr>
                                        <td>2</td>
                                        <td>Собрано бухгалтерских документов</td>
                                        <td><?php echo ($kodsum) ?></td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                    </tr>

<?php
				$kodsum = 0;				
				$userstable = "blogi";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				    $kodsum = $kodsum + 1;
				}
?>

                                    <tr>
                                        <td>3</td>
                                        <td>Колличество блоков</td>
                                        <td><?php echo ($kodsum) ?></td>
                                        <td><span class="label label-sm label-warning"><a href="http://www.mailvirtual.ru/obyavlen.php">ПОДРОБНЕЕ...</a>   </span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Еще...</td>
                                        <td>15</td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>




<?php
				$kodsum = 0;				
				$userstable = "yrdocall";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				    $pismo = $row[testdoc];
				}
?>



<?php
				$kodsum = 0;				
				$userstable = "protokol";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE name ='главная странца' ORDER BY id";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				$kodsum = $kodsum + 1;
				}

				$kod404 = 0;				
				$userstable = "protokol";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE name ='404 страница' ORDER BY id";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				$kod404 = $kod404 + 1;
				}

				$kodyrist = 0;				
				$userstable = "protokol";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE name ='Юрист' ORDER BY id";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				$kodyrist = $kodyrist + 1;
				}

				$kodyellopage = 0;				
				$userstable = "protokol";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE name ='Желтые страницы' ORDER BY id";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				$kodyellopage = $kodyellopage + 1;
				}

        			$kodofirme = 0;
				$userstable = "protokol";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE name ='О фирме' ORDER BY id";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				$kodofirme = $kodofirme + 1;
				}
       
				
				$kodanalizst = 0;
				$userstable = "protokol";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE name ='Анализ страницы' ORDER BY id";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				$kodanalizst = $kodanalizst + 1;
				}



				$kodkarta = 0;
				$userstable = "protokol";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE name ='Карта' ORDER BY id";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
				$kodkarta = $kodkarta + 1;
				}


       

?>


			<div class="panel panel-blue" style="background:#FFF;">
                            <div class="panel-heading">Посещаемость сайта</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Главная страница сайта</td>
                                        <td><?php echo ($kodsum) ?></td>
                                        <td><span class="label label-sm label-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Страниц 404</td>
                                        <td><?php echo ($kod404) ?></td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Юрист страница</td>
                                        <td><?php echo ($kodyrist) ?></td>
                                        <td><span class="label label-sm label-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Желтые страницы</td>
                                        <td><?php echo ($kodyellopage) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>О фирме</td>
                                        <td><?php echo ($kodofirme) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td>6</td>
                                        <td>Анализ сайта</td>
                                        <td><?php echo ($kodanalizst) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
				    <tr>
                                        <td>7</td>
                                        <td>Карта сайта</td>
                                        <td><?php echo ($kodkarta) ?></td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>5</th>
                                        <th><i>Итого</i></th>
                                        <th>100</th>
                                        <th><i>1 Approved</i></th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

			<div class="panel panel-red">
                            <div class="panel-heading">Вопросы юриста</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Column</th>
                                        <th>Column</th>
                                        <th>Column</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
				$kodsum = 0;				
				$userstable = "yrvopros";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1 ";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
                                    echo '<tr class="active">';
                                        echo '<td>1</td>';
                                        echo '<td>'.$row[title].'</td>';
                                        echo '<td>'.$row[opis].'</td>';                                        
	echo '<td><span class="label label-sm label-success"><a href="yurvopros.php?id='.$row[id].'">ПОДРОБНЕЕ...</a></span></td>';
                                    echo '</tr>';
				}

?>

				
                                    




                                    </tbody>
                                </table>
                            </div>
                        </div>



		    
                        <div class="panel panel-violet">
                            <div class="panel-heading">Вопросы бухгалтера</div>
                            <div class="panel-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

<?php
				$userstable = "buhdokumklient";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1 ";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
                                    echo '<tr class="active">';
                                        echo '<td>1</td>';
                                        echo '<td>'.$row[title].'</td>';
                                        echo '<td>'.$row[opis].'</td>';
                                        echo '<td><span class="label label-sm label-success">'.$row[idklient].'</span></td>';
                                    echo '</tr>';
				}

?>
                                  
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>





			<div class="panel panel-green">
                            <div class="panel-heading">Общие вопросы</div>
                            <div class="panel-body">
                                <table class="table table-hover-color">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Age</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
<?php
				$userstable = "latermail";
  				mysql_select_db($dbName); 
           			$query = "SELECT * FROM $userstable WHERE 1=1 ";
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
                                    echo '<tr class="active">';
                                        echo '<td>1</td>';
                                        echo '<td>'.$row[koment].'</td>';
                                        echo '<td>'.$row[pismo].'</td>';
                                        echo '<td><span class="label label-sm label-success">'.$row[idklienta].'</span></td>';
                                    echo '</tr>';
				}

?>                                     
                                                                        </tbody>
                                </table>
                            </div>
                        </div>




                    </div>



			  					<?php 
                                        // 4 блока в конце сайта 
                                        include_once("main4blok.php");
					        ?> 


                   


   
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
