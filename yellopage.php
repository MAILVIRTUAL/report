<?php 
   // Стандартный набор для всех страниц
   include_once("mainstart.php");
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
   $tipport = $_SESSION['tipport'];
   
   
   
   if ($ftitle == '')
   {
	 $ftitle = '%';
   }
   else
   {
   $ftitle = '%'.$ftitle.'%';
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
    <title>Желтые страницы интернет</title>
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
<?php $protokol = 'Желтые страницы'; include_once("analyticstracking.php") ?>
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
                        <li><i class="fa fa-home"></i>&nbsp;<a href="yellopage.php">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active"><a href="utilit.php">Дополнительные услуги</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Желтые страницы</li>
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

				         <ul class="pagination mtm mbm">                                            
                                            <li><a href="yellopage.php?sim=0">0-9</a></li>
                                            <li><a href="yellopage.php?sim=A">A</a></li>
                                            <li><a href="yellopage.php?sim=B">B</a></li>
                                            <li><a href="yellopage.php?sim=C">C</a></li>
                                            <li><a href="yellopage.php?sim=D">D</a></li>
                                            <li><a href="yellopage.php?sim=E">E</a></li>
					    <li><a href="yellopage.php?sim=F">F</a></li>
                                            <li><a href="yellopage.php?sim=G">G</a></li>
                                            <li><a href="yellopage.php?sim=H">H</a></li>
                                            <li><a href="yellopage.php?sim=I">I</a></li>
                                            <li><a href="yellopage.php?sim=J">J</a></li>
                                            <li><a href="yellopage.php?sim=K">K</a></li>
                                            <li><a href="yellopage.php?sim=L">L</a></li>
                                            <li><a href="yellopage.php?sim=M">M</a></li>
                                            <li><a href="yellopage.php?sim=N">N</a></li>
                                            <li><a href="yellopage.php?sim=O">O</a></li>
					    <li><a href="yellopage.php?sim=P">P</a></li>
                                            <li><a href="yellopage.php?sim=Q">Q</a></li>
                                            <li><a href="yellopage.php?sim=R">R</a></li>
                                            <li><a href="yellopage.php?sim=S">S</a></li>
                                            <li><a href="yellopage.php?sim=T">T</a></li>
                                            <li><a href="yellopage.php?sim=U">U</a></li>
                                            <li><a href="yellopage.php?sim=V">V</a></li>
                                            <li><a href="yellopage.php?sim=W">W</a></li>
                                            <li><a href="yellopage.php?sim=X">X</a></li>
                                            <li><a href="yellopage.php?sim=Y">Y</a></li>
					    <li><a href="yellopage.php?sim=Z">Z</a></li>                                            
                                        </ul>
					
					<BR>


					

					<?php  
					$mmax = $m - 1;
					$mmin = $m + 1;
					?>

					<ul class="pagination pagination-sm mtm mbm">
                                         <?php  echo '<li><a href="yellopage.php?sim='.$sim.'&m='.$mmax.'">&laquo;</a></li>'; ?>
                                            <?php echo '<li><a href="#">'.$m.' страница</a></li>'; ?>                                            
                                         <?php  echo '<li><a href="yellopage.php?sim='.$sim.'&m='.$mmin.'">&raquo;</a></li>'; ?>
                                        </ul>
<form action="yellopage.php" method="post">               
<p>Слово поиска <input type="text" name="poisk"/><input type="submit" /> </p>
</form>
<a href="fil.php" class="navbar-brand">Фильтр</a>

                    
                        <div class="panel panel-yellow">
                            <div class="panel-heading">Список сайтов <?php echo ($sim); echo ('Описание ('.$ftitle.', порт '.$tipport.')') ?>  '</div>
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

				$hostname = "127.0.0.1";
			        $username = "izofen";
			        $password = "podkjf4";
			        $dbName   = "rusnet";
			        mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");
			        mysql_query("SET NAMES 'utf-8'"); 
			        mysql_query("SET NAMES 'utf8'");

				$userstable = "site";
  				mysql_select_db($dbName);
          
    if ($_SESSION['tipport']  == '1450')
    { 
    $p1450 = "%open%";
    }     
    else
    { 
    $p1450 = "%";
    }          


    if ($_SESSION['tipport']  == '445')
    { 
    $p445 = "%open%";
    }     
    else
    { 
    $p445 = "%";
    }          


    if ($_SESSION['tipport']  == '21')
    { 
    $p21 = "%open%";
    }     
    else
    { 
    $p21 = "%";
    }          

          
          
		$query = "SELECT * FROM $userstable WHERE titlerus like '".$ftitle."' and namerus like '".$sim."%' and titlerus <> 'сайт не найден' and titlerus <> 'не обработано' and  p1450 like '".$p1450."' and  p21 like '".$p21."' and  p445 like '".$p445."'   Limit ".$min.",".$max." ";
		//echo $query;

																   	


                                //echo ($query);   
				$res = mysql_query($query) ;  
                                $nomer = ($m-1)*100;
				while ($row=mysql_fetch_array($res)) 
  				{
			        	
				 echo '<tr>';
                                        $nomer = $nomer + 1;
                                        echo '<td>'.$nomer.'</td>';
                                        echo '<td><a href="http://www.'.$row[namerus].'">'.$row[namerus].'</a></td>';
                                        echo '<td><a href="edit.php?id='.$row[id].'">'.$row[titlerus].'</a></td>';
                                        echo '<td><span class="label label-sm label-success">+15</span></td>';
                                 echo '</tr>';


				}	

?>

                                   



                                    <tr>
                                        <td>2</td>
                                        <td>John</td>
                                        <td>45</td>
                                        <td><span class="label label-sm label-info">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>30</td>
                                        <td><span class="label label-sm label-warning">Suspended</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Lahm</td>
                                        <td>15</td>
                                        <td><span class="label label-sm label-danger">Blocked</span></td>
                                    </tr>
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
