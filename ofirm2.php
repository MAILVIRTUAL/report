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

    // Описание карты сайта 
   if (isset($_GET ['opis']))
   {
    $opis = $_GET ['opis'];
    $userstable = "firmlist";
    mysql_select_db($dbName); 
    $query = "SELECT * FROM $userstable WHERE id=".$opis." ";
    $res = mysql_query($query) ;  
    while ($row=mysql_fetch_array($res)) 
        {
          $tekst  = $row [tekst]; 
          $opis = $row [opis];  
        }
   } 
   else
   {
          $tekst  = 'Выберите меню для подробного описания'; 
          $opis = 'Карта сайта. Подробное меню для удобной навигации по сайту.';                
   }
 

    //<!-- MailVirtual Analytics -->    
    $protokol = 'О фирме';
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
      	//	echo "Данные не обновлены!";
    	}
    }     
    //<!-- MailVirtual Analytics -->  
 








 
?> 

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Достижения фирмы</title>
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
     <link type="text/css" rel="stylesheet" href="styles/nestable.css">
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
                    <?php include_once("addtask.php") ?>
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
                            Информация о фирме</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dropdown</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Информация о фирме</li>
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
                     <div class="col-lg-6">
                        <div class="panel">     
                            <div class="panel-body"><h4 class="block-heading">ООО ФИТА</h4>
                            
                                 
                                 <div id="nestable" class="dd">                                
                                    <ol class="dd-list">









				<?php 
	  		        $userstable = "firmlist";
        	                mysql_select_db($dbName); 
               	   		$query = "SELECT * FROM $userstable WHERE 1=1 ";
		        	$res = mysql_query($query) ;  
        			while ($row=mysql_fetch_array($res)) 
        			{
		           		$tekst = $row[tekst];               
            				//echo ('<h'.$row[uroven].'> <a href="ofirm.php?us='.$row[id].'">'.$tekst.'</a></h'.$row[uroven].'>');
                      			//echo ($opisrab);



					if ($row[uroven] == 2)
					{
					echo '<li data-id="2" class="dd-item">';
                                            echo '<div class="dd3-content"><a href="">'.$tekst.'</a></div>';
                                            echo '<ol class="dd-list"> ';
					}	

					if ($row[uroven] == 4)
					{
                                                echo '<li data-id="3" class="dd-item">  ';
                                                    echo '<div class="dd3-content"><a href="ofirm2.php?opis='.$row[id].'">'.$tekst.'</a></div>';
                                                echo '</li>';
					}

                                                
                                        if ($row[uroven] == 1)
					{                                                       
                                            echo '</ol>';                                          
                                        echo '</li>';
					}



                			
	        		}




?>

					<?php

                                      // <li data-id="1" class="dd-item">
                                          //<div class="dd3-content"><a href="karta.php?opis=1">Главная</a></div>
                                       //</li>                                                                                                           

                                      // <li data-id="1" class="dd-item"> 
                                         // <div class="dd3-content"><a href="karta.php?opis=36">Документооборот</a></div>
                                       //</li> 
                                        
                                       ?> 
                                                                             
                                                                               
                                       

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Описание</h4>

                                       
                              <?php echo ($opis); ?>             

                                
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Помощь</h4>

                              <?php echo ($opis); ?> 
                                
                            </div>
                        </div>
                    </div>
                </div>
                              
                              
                                </div>
                                
</div>
                                <div class="row">
                                    <div class="col-lg-12"><h2 class="mbxl">Наши достижения</h2>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="member-team"><img src="images/yevgen.jpg" class="img-responsive"/>

                                                    <h3>Евгения Гончарова
                                                        <small>>Юрист</small>
                                                    </h3>
                                                    <p>Публикация в газете статьи "Долевое участие в строительстве. Что можно потребовать от застройщика, в случае неисполнения им обязательств." <a href="yevgeniyanews.php">Подробнее...</a>
                                                    <ul class="social-icons list-unstyled list-inline mbl mtl">
                                                        <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="member-team"><img src="http://lorempixel.com/640/480/business/7/" class="img-responsive"/>

                                                    <h3>Nathan Murray
                                                        <small>Project Manager</small>
                                                    </h3>
                                                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
                                                    <ul class="social-icons list-unstyled list-inline mbl mtl">
                                                        <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="member-team"><img src="http://lorempixel.com/640/480/business/1/" class="img-responsive"/>

                                                    <h3>Rachel Jordan
                                                        <small>Designer</small>
                                                    </h3>
                                                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae.</p>
                                                    <ul class="social-icons list-unstyled list-inline mbl mtl">
                                                        <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="member-team"><img src="images/yevgen.jpg" class="img-responsive"/>

                                                    <h3>Евгения Гончарова
                                                        <small>Юрист</small>
                                                    </h3>
                                                    <p>Благодарность за оперативную подготовку нормативной документации при проведении матчей Первенства России по футболу. <a href="download/doc09266020160328140426.pdf">Скачать бланк...</a> </p>
                                                    <ul class="social-icons list-unstyled list-inline mbl mtl">
                                                        <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
										<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-content">
												<ul class="list-inline item-details">
													<li><a href="http://themifycloud.com">Admin templates</a></li>
													<li><a href="http://themescloud.org">Bootstrap themes</a></li>
												</ul>
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
                        <a href="http://www.mailvirtual.ru">2016 © ООО ФИТА тел. 8 (3532) 27-15-63, ICQ 443039, e-mail kupinov@mail.ru, skype Izofen74, viber +79033671563 </a></div>
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

    <script src="script/jquery.nestable.js"></script>
<script src="script/ui-nestable-list.js"></script>
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
