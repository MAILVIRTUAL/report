<?php 
   // Стандартный набор для всех страниц
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
        }
        //echo $Obrashen;
    }
  //<!-- MailVirtual Analytics -->
    
    $protokol = 'Контакт';


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
      		$metkahorvop = "yes";
    	}
    	else
    	{
      		echo "Данные не обновлены!";
    	}
    }     

        

    //<!-- MailVirtual Analytics -->

// какой ролик включать по ссылке
 if (isset($_GET ['eng']))
   {
        $eng   = $_GET ['eng'];
    }
  else
    {
        $eng   = 1;
    }
        $userstable = "english";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE id = '".$eng."' ";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
            $filename = $row[filename];
            
        }



// ишем 4 новости для продолжения


  $userstable = "blogi";
  mysql_select_db($dbName); 
  $queryALL = "SELECT * FROM $userstable WHERE 1=1 ";
  $resALL = mysql_query($queryALL) ;  
  $nomerALL = 0;
  while ($rowALL=mysql_fetch_array($resALL)) 
  {
  	$nomerALL = $nomerALL + 1;
  }
  //echo ($nomerALL);
  //echo rand(1, $nomerALL);


  $nomer01 = rand(1, $nomerALL);
  $nomer02 = rand(1, $nomerALL);
  $nomer03 = rand(1, $nomerALL);
  $nomer04 = rand(1, $nomerALL);



  $userstable = "blogi";
  mysql_select_db($dbName); 
  $query4 = "SELECT * FROM $userstable WHERE 1=1 ";
  $res4 = mysql_query($query4) ;  
  $nomer = 0;
  while ($row4=mysql_fetch_array($res4)) 
  {
	$nomer = $nomer + 1;
        //echo $nomer;
        //echo '===================';
	if ($nomer == $nomer01)
	{
        	//$mainblok  = $row4[opis]; 
        	$maintitle01 = $row4[title]; 
        	//$mainhref  = $row4[href];
        	$idavtor01  = $row4[idavtor];
                $idblok01   = $row4[id];
                $blokpic01    = $row4[pict]; 


        	// Ищем фотографию автора
        	$userstable = "user";
        	mysql_select_db($dbName); 
        	$query = "SELECT * FROM $userstable WHERE id = '".$idavtor01."'";
        	//echo $idavtor; 
        	$res = mysql_query($query);  
        	while ($row=mysql_fetch_array($res)) 
        	{
          		$mainpic01  = $row[fotoklienta];
          		$Avtor01 = $row[FirstName]." ".$row[LastName];
                        $prof01  = $row[prof];

        	}
        	// Конец поиска автора

               //echo $Avtor01;


	}  
         
	if ($nomer == $nomer02)
	{
        	//$mainblok  = $row4[opis]; 
        	$maintitle02 = $row4[title]; 
        	//$mainhref  = $row4[href];
        	$idavtor02  = $row4[idavtor];
                $idblok02   = $row4[id];
                $blokpic02    = $row4[pict]; 
        	// Ищем фотографию автора
        	$userstable = "user";
        	mysql_select_db($dbName); 
        	$query = "SELECT * FROM $userstable WHERE id = '".$idavtor02."'";
        	//echo $idavtor; 
        	$res = mysql_query($query);  
        	while ($row=mysql_fetch_array($res)) 
        	{
          		$mainpic02  = $row[fotoklienta];
          		$Avtor02 = $row[FirstName]." ".$row[LastName];
                        $prof02  = $row[prof];
        	}
        	// Конец поиска автора
		//echo $Avtor02;
	}  

	


	if ($nomer == $nomer03)
	{
        	//$mainblok  = $row4[opis]; 
        	$maintitle03 = $row4[title]; 
		//$mainhref  = $row4[href];
		$idavtor03  = $row4[idavtor];
                $idblok03   = $row4[id];
                $blokpic03    = $row4[pict]; 
        	// Ищем фотографию автора
        	$userstable = "user";
        	mysql_select_db($dbName); 
        	$query = "SELECT * FROM $userstable WHERE id = '".$idavtor03."'";
        	//echo $idavtor; 
        	$res = mysql_query($query);  
        	while ($row=mysql_fetch_array($res)) 
        	{
          		$mainpic03  = $row[fotoklienta];
          		$Avtor03 = $row[FirstName]." ".$row[LastName];
                        $prof03  = $row[prof];
        	}
        	// Конец поиска автора
	}  

	

	if ($nomer == $nomer04)
	{
        	//$mainblok  = $row4[opis]; 
        	$maintitle04 = $row4[title]; 
        	//$mainhref  = $row4[href];
        	$idavtor04  = $row4[idavtor];
                $idblok04   = $row4[id];
                $blokpic04    = $row4[pict]; 
        	// Ищем фотографию автора
        	$userstable = "user";
        	mysql_select_db($dbName); 
        	$query = "SELECT * FROM $userstable WHERE id = '".$idavtor04."'";
        	//echo $idavtor; 
        	$res = mysql_query($query);  
        	while ($row=mysql_fetch_array($res)) 
        	{
          		$mainpic04  = $row[fotoklienta];
          		$Avtor04 = $row[FirstName]." ".$row[LastName];
                        $prof04  = $row[prof];
        	}
        	// Конец поиска автора
	}  

	
        



        
  }
 


?> 

<!DOCTYPE html>
<html lang="ru">
<head>
<?php include_once("analyticstracking.php") ?>

<?php
    echo "<title>".$filename."</title>";
?>


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


<?php
                           echo ($filename);
?> 


</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pages</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Whats your name?</li>
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
                              <div class="col-lg-6">
<?php
                                      echo  '<iframe src="video/'.$filename.'.webm" style="width: 100%; height:340px; border:0"></iframe>';
?>
                                    </div>
<?php
                                  echo '<div class="col-lg-6"><p><p><a href="video/'.$filename.'.mp4" download>Скачать фильм</a> .</p>';
?>


                                        <ol class="pll">
<?php
        $userstable = "english";
        mysql_select_db($dbName); 
        $queryall = "SELECT * FROM $userstable WHERE 1=1 ";
        $resall = mysql_query($queryall);  

        while ($rowall=mysql_fetch_array($resall)) 
        {
            $filenameall = $rowall[filename];
            $ideng    = $rowall[id];
            echo ('<li><a href="eng001.php?eng='.$ideng.'">'.$filenameall.'</a></li>');
        }
?>

                                            
                                            
                                        </ol>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h2 class="mbxl">Наши блоги</h2>

                                        <div class="row">



<!--ВЫВОД НОВОСТЕЙ В КОНЦЕ СТРАНИЧКИ-->
<?php
    if ($blokpic01 == '') 
    {$blokpic01 = 'nopict.jpg';}
    if ($blokpic02 == '') 
    {$blokpic02 = 'nopict.jpg';}
    if ($blokpic03 == '') 
    {$blokpic03 = 'nopict.jpg';}
    if ($blokpic04 == '') 
    {$blokpic04 = 'nopict.jpg';}
?>


	<div class="col-lg-3">
<?php 
	echo '<div class="member-team"><img src="/blog/pict/'.$blokpic01.'" class="img-responsive"/>';
?>
<?php
	echo '<h3>'.$Avtor01;
?>
<?php
	echo '<small>>'.$prof01.'</small>';
?>

	</h3>
<?php 
	echo ('<p>'.$maintitle01.'<a href="bloknew.php?idnew='.$idblok01.'"><br><br>Подробнее...<br><br></a>');
?>                                                   
	</div>
	</div>




<div class="col-lg-3">
<?php 
	echo '<div class="member-team"><img src="/blog/pict/'.$blokpic02.'" class="img-responsive"/>';
?>
<?php
	echo '<h3>'.$Avtor02;
?>
<?php
	echo '<small>>'.$prof02.'</small>';
?>
	</h3>
<?php    						  
	echo ('<p>'.$maintitle02.'<a href="bloknew.php?idnew='.$idblok02.'"><br><br>Подробнее...<br><br></a>');
?>                                                    
	</div>
	</div>
<div class="col-lg-3">
<?php 
	echo '<div class="member-team"><img src="/blog/pict/'.$blokpic03.'" class="img-responsive"/>';
?>
<?php
	echo '<h3>'.$Avtor03;
?>
<?php
                                                        echo '<small>>'.$prof03.'</small>';
?>

                                                    </h3>
<?php   					
                                                    echo ('<p>'.$maintitle03.'<a href="bloknew.php?idnew='.$idblok03.'"><br><br>Подробнее...<br><br></a>');
?>                                                    
                                                </div>
                                            </div>

<div class="col-lg-3">
<?php 
                                              echo '<div class="member-team"><img src="/blog/pict/'.$blokpic04.'" class="img-responsive"/>';
?>
<?php                                                    echo '<h3>'.$Avtor04;
?>
<?php
                                                        echo '<small>>'.$prof04.'</small>';
?>
                                                    </h3>
<?php     					;
                                                    echo ('<p>'.$maintitle04.'<a href="bloknew.php?idnew='.$idblok04.'"><br><br>Подробнее...<br><br></a>');
?>                                              
                                                </div>
                                            </div>
<!--ВЫВОД НОВОСТЕЙ В КОНЦЕ СТРАНИЧКИ-->
                                            
                            
                            
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
