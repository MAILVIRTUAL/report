<?php 
   // Стандартный набор для всех страниц
   include_once("mainstart.php");
   // Слово которое набрал пользователь в поиске
   if (isset($_GET ['poisk']))
   {	
        $poisk = $_GET ['poisk'];
   }
   $otvet = "";
   $utoch = "";
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Поиск по сайту</title>
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
                            Поиск по сайту</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Поиск по сайту</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Поиск по сайту</li>
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
                    
                        <div class="panel panel-yellow">
                            <div class="panel-heading">Настройки поиска</div>
                            <div class="panel-body">
                            
                            
                            
                            
                            
                                  <?php
                                  echo '<div class="col-lg-12"><h4 class="box-heading">Поиск по сайту слова '.$poisk.' </h4>';
                                  ?>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Слово</a></div>
                                                    <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
                                                    <form action = "poisk.php" method = "GET" role="search" class="navbar-form navbar-left">
                                                        <div class="form-group">  <input type="text" name = "poisk" placeholder="Поиск" class="form-control"/></div>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-green">Поиск</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                    
                            
                            
                            
                            
                               



                            </div>
                        </div>
                        
                   
                   
      


        <?php
        if ($poisk <> "")
        {
        
        
        
        include_once("connect.php");
				$userstable = "blogi";
  			mysql_select_db($dbName);        
        $metkavivoda = "No";
	  		$query = "SELECT * FROM $userstable WHERE opis like '%".$poisk."%'  Limit 1   ";        
				$res = mysql_query($query) ;
        while ($row=mysql_fetch_array($res)) 
  			{
        $metkavivoda = "Yes";
        }
        
        if ($metkavivoda == "Yes")
        {  
        
        ?>   


			  <div class="panel panel-green">
                            <div class="panel-heading">Поиск по блокам</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Автор</th>
                                        <th>Строка поиска</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>
        <?php
				include_once("connect.php");
				$userstable = "blogi";
  			mysql_select_db($dbName);
        $Nomer = 0;  
        $query = "SELECT * FROM $userstable WHERE opis like '%".$poisk."%'  Limit 50   ";  
        $res = mysql_query($query);
				while ($row=mysql_fetch_array($res)) 
  			{                                                                        
                                    echo '<tr>';
                                        $Nomer = $Nomer +1;
                                        echo '<td>'.$Nomer.'</td>';                                        
                                          $userstable = "user";
  			                                  mysql_select_db($dbName); 
				                                  $nomer = 0;
	  		                                  $queryuser = "SELECT * FROM $userstable WHERE id = ".$row[idavtor]."   ";        
				                                  $resuser = mysql_query($queryuser) ;  
				                                  while ($rowuser=mysql_fetch_array($resuser)) 
  			                                       { 
                                               $nameavtor = $rowuser[FirstName].'  '.$rowuser[LastName];  
                                               }     
                                        echo '<td>'.$nameavtor.'</td>';
                                        echo '<td><a href="bloknew.php?idnew='.$row[id].'">'.$row[title].'</a></td>';
                                        echo '<td><span class="label label-sm label-success">+5</span></td>';
                                    echo '</tr>';
        }   
        ?>                                 



                                    </tbody>
                                </table>
                            </div>
                        </div>

        <?php
             }
        ?>


        <?php
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА => 
				$userstable = "yrdocall";
        $metkavivoda = "No";
  			mysql_select_db($dbName); 
				$nomer = 0;
	  		$query = "SELECT * FROM $userstable WHERE testdoc like '%".$poisk."%'  and titledoc <> '' Limit 1  ";        
				$res = mysql_query($query) ;  
				while ($row=mysql_fetch_array($res)) 
  			{
        $metkavivoda = "Yes";        
        }
        
        if ($metkavivoda == "Yes")
        {   
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА <= 
        ?>                                  

			<div class="panel panel-orange">
                            <div class="panel-heading">Поиск по юридическим шаблонам</div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Имя сайта</th>
                                        <th>Описание</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>
        <?php
				include_once("connect.php");
				$userstable = "yrdocall";
  			mysql_select_db($dbName); 
				$nomer = 0;
	  		$query = "SELECT * FROM $userstable WHERE testdoc like '%".$poisk."%'  and titledoc <> '' Limit 50  ";        
				$res = mysql_query($query) ;  
				while ($row=mysql_fetch_array($res)) 
  			{                                                                        
                                    echo '<tr>';
                                        echo '<td>1</td>';
                                        echo '<td>Открыть</td>';
                                        echo '<td><a href="bloknew.php?idnew='.$row[id].'">'.$row[titledoc].'</a></td>';
                                        echo '<td><span class="label label-sm label-success">Approved</span></td>';
                                    echo '</tr>';
        }   
        ?>   
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
       <?php                
        }  
        
        
        
        
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА => 
				$userstable = "yrvopros";
        $metkavivoda = "No";
  			mysql_select_db($dbName); 
				$nomer = 0;
	  		$query = "SELECT * FROM $userstable WHERE opis like '%".$poisk."%'  Limit 1   ";       
				$res = mysql_query($query) ;  
				while ($row=mysql_fetch_array($res)) 
  			{
        $metkavivoda = "Yes";        
        }
        
        if ($metkavivoda == "Yes")
        {   
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА <= 
        ?>     
        
        
         
        ?>                        


			<div class="panel panel-blue" style="background:#FFF;">
                            <div class="panel-heading">Поиск по вопросам юриcта</div>
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
        <?php
				include_once("connect.php");
				$userstable = "yrvopros";
  			mysql_select_db($dbName); 
				$nomer = 0;
	  			$query = "SELECT * FROM $userstable WHERE opis like '%".$poisk."%'  Limit 50   ";        
				$res = mysql_query($query) ;  
				while ($row=mysql_fetch_array($res)) 
  			{                                                                        
                                    echo '<tr>';
                                        echo '<td>1</td>';
                                        echo '<td>Открыть</td>';
                                        echo '<td><a href="bloknew.php?idnew='.$row[id].'">'.$row[title].'</a></td>';
                                        echo '<td><span class="label label-sm label-success">+15</span></td>';
                                    echo '</tr>';
        		}   
        ?>   
 
                                </table>
                            </div>
                        </div>
                        
 <?php                        
   }
   // ЗАВЕРШЕНИЕ ВОЗМОЖНОСТИ ВЫВОДА 
   
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА => 
				$hostname = "127.0.0.1";
			  $username = "izofen";
			  $password = "podkjf4";
			  $dbName   = "rusnet";
			  mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
			  mysql_query("SET NAMES 'utf-8'"); 
			  mysql_query("SET NAMES 'utf8'");
				$userstable = "site";
  			mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE titlerus like '%".$poisk."%'  Limit 1";
				$res = mysql_query($query) ;    
				while ($row=mysql_fetch_array($res)) 
  			{
        $metkavivoda = "Yes";        
        }
        
        if ($metkavivoda == "Yes")
        {   
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА <=                        
 ?>
			<div class="panel panel-red">
                            <div class="panel-heading">Вопросы в описании сайтов</div>
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Описание</th>
                                        <th>Ссылка</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>



<?php
				      $hostname = "127.0.0.1";
			        $username = "izofen";
			        $password = "podkjf4";
			        $dbName   = "rusnet";
              $nomer = 0;
			        mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
			        mysql_query("SET NAMES 'utf-8'"); 
			        mysql_query("SET NAMES 'utf8'");
				      $userstable = "site";
  				    mysql_select_db($dbName); 
           		$query = "SELECT * FROM $userstable WHERE titlerus like '%".$poisk."%'  Limit 50 ";
				      $res = mysql_query($query) ;  
				      while ($row=mysql_fetch_array($res)) 
  			      {                                                                        
                                    echo '<tr>';
                                        $nomer = $nomer +1; 
                                        echo '<td>'.$nomer.'</td>';
                                        echo '<td><a href="http://www.'.$row[namerus].'">'.$row[namerus].'</a></td>';
                                        echo '<td><a href="edit.php?id='.$row[id].'">'.$row[titlerus].'</a></td>';
                                        echo '<td><span class="label label-sm label-success">+10</span></td>';
                                    echo '</tr>';
        		  }   
?>   
   

  
				
                                    




                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
<?php                        
   } 
   
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА => 
        include_once("connect.php");
  			mysql_select_db($dbName); 
			  $userstable = "buhdokumklient";
  		  mysql_select_db($dbName); 
        $metkavivoda = "No"; 
        $query = "SELECT * FROM $userstable WHERE 1=1 Limit 1";        
				$res = mysql_query($query);
        while ($row=mysql_fetch_array($res))  
  			{
        $metkavivoda = "Yes";     
        }
        
        if ($metkavivoda == "Yes")
        {   
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА <=    
   
?>                               
                        <div class="panel panel-violet">
                            <div class="panel-heading">Вопросы бухгалтера</div>
                            <div class="panel-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Тема</th>
                                        <th>Дата</th>
                                        <th>Статус</th>
                                    </tr>
                                    </thead>
                                    <tbody>

<?php
        include_once("connect.php");
  			mysql_select_db($dbName); 
			  $userstable = "buhdokumklient";
				$userstable = "buhdokumklient";
  		  mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE 1=1 ";
        echo ($query);
				$res = mysql_query($query) ;
				while ($row=mysql_fetch_array($res)) 
  				{
          echo ('--------------------');
                                    echo '<tr class="active">';
                                        echo '<td>1</td>';
                                        echo '<td>'.$row[title].'</td>';
                                        echo '<td>'.$row[title].'</td>';
                                        echo '<td><span class="label label-sm label-success">'.$row[idklient].'</span></td>';
                                    echo '</tr>';
				 }

?>
                                  
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>

      <?php                        
      } 
      
      
        // ПРОВЕРКА НА ВОЗМОЖНОСТЬ ВЫВОДА => 
        include_once("connect.php");
        $userstable = "latermail";
  			mysql_select_db($dbName); 
        $metkavivoda = "No"; 
        $query = "SELECT * FROM $userstable WHERE 1=1 Limit 1";      
				$res = mysql_query($query) ;
        while ($row=mysql_fetch_array($res))  
  			{
        $metkavivoda = "Yes";     
        }
        
        if ($metkavivoda == "Yes")
        {   
      
      ?>




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
                        
                        
<?php                        
}
}                        
?>



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
