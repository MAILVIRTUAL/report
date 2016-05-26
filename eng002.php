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
?> 

<!DOCTYPE html>
<html lang="ru">
<head>
<?php include_once("analyticstracking.php") ?>
    <title></title>
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
                            02. How are you?</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pages</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">02. How are you?</li>
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
                                        <iframe src="video/02. How are you.webm" style="width: 100%; height:340px; border:0"></iframe>
                                    </div>
                                    <div class="col-lg-6"><p><p><a href="video/How are you.mp4" download>Скачать фильм</a> .</p>
                                        <ol class="pll">
                                            <li><a href="eng001.php">01. Whats your name?</a></li>
                                            <li><a href="eng002.php">02. How are you?</a></li>
                                            <li><a href="eng003.php">03. Can you help me</a></li>
                                            <li><a href="eng004.php">04. Left, right, straight ahead</a></li>
                                            <li><a href="eng005.php">05. Where are they</a></li>
                                            <li><a href="eng006.php">06. Whats the time</a></li>
                                            <li><a href="eng007.php">07. Whats this .Whats that</a></li>
                                            <li><a href="eng008.php">08. I like it very much</a></li>
                                            <li><a href="eng009.php">09. Have you got any wine</a></li>
                                            <li><a href="eng010.php">10. What are they doing</a></li>
                                            <li><a href="eng011.php">11. Can I have you name, please</a></li>
                                            <li><a href="eng012.php">12. What does she look like</a></li>
                                            <li><a href="eng013.php">13. No smoking</a></li>
                                            <li><a href="eng014.php">14. It on the first floor</a></li>
                                            <li><a href="eng015.php">15. Wheres he gone</a></li>
                                            <li><a href="eng016.php">16. Going away</a></li>
                                        </ol>                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h2 class="mbxl">Еще клипы</h2>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="member-team"><img src="http://lorempixel.com/640/480/business/1/" class="img-responsive"/>

                                                    <h3>Michelle Bates
                                                        <small>CEO</small>
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
                                                <div class="member-team"><img src="http://lorempixel.com/640/480/business/7/" class="img-responsive"/>

                                                    <h3>Margaret Adams
                                                        <small>Developer</small>
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
