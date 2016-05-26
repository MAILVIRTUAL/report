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
    
    $protokol = 'Фотография';


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
<html lang="en">
<head>
<?php include_once("analyticstracking.php") ?>
    <title>Фотографии</title>
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
                            Фотографии</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">UI Elements</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">UI Elements</li>
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
                            <div class="col-lg-12">
                        <ul id="generalTab" class="nav nav-tabs responsive">
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Наши фотографии</a></li>
                            <li><a href="#note-tab" data-toggle="tab">Награды</a></li>
                            <li><a href="#label-badge-tab" data-toggle="tab">Юмор почты</a></li>
                            <li><a href="#pagination-tab" data-toggle="tab">Paginations</a></li>
                            <li><a href="#input-group-tab" data-toggle="tab">Input Groups</a></li>
                            <li><a href="#list-group-tab" data-toggle="tab">List Group</a></li>
                            <li><a href="#navbar-tab" data-toggle="tab">Navbar</a></li>
                            <li><a href="#thumbnail-tab" data-toggle="tab">Thumbnails</a></li>
                            <li><a href="#other-tab" data-toggle="tab">Others</a></li>
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="alert-tab" class="tab-pane fade in active">
                                <div class="row">
                                    

<img src="/download/trener.jpg" alt="123123">
                                    
                                </div>
                            </div>
                            <div id="note-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                        
<img src="/download/gazeta.jpg" alt="123123">


                                    </div>
                                </div>
                            </div>
                            <div id="label-badge-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6"><h3>Labels</h3><span class="label label-default">Default</span>&nbsp;<span class="label label-primary">Primary</span>&nbsp;<span class="label label-success">Success</span>&nbsp;<span class="label label-info">Info</span>&nbsp;<span class="label label-warning">Warning</span>&nbsp;<span class="label label-danger">Danger</span>

                                        <div class="mbxl"></div>
                                        <h3>Label Colors</h3><span class="label label-red">Red</span>&nbsp;<span class="label label-orange">Orange</span>&nbsp;<span class="label label-green">Green</span>&nbsp;<span class="label label-yellow">Yellow</span>&nbsp;<span class="label label-blue">Blue</span>&nbsp;<span class="label label-violet">Violet</span>&nbsp;<span
                                                class="label label-pink">Pink</span>&nbsp;<span class="label label-grey">Grey</span>&nbsp;<span class="label label-dark">Dark</span>

                                        <div class="mbxl"></div>
                                        <h3>Label In Headings</h3>

                                        <h1>Example heading
                                            &nbsp;<span class="label label-default">Default</span></h1>

                                        <h2>Example heading
                                            &nbsp;<span class="label label-primary">Primary</span></h2>

                                        <h3>Example heading
                                            &nbsp;<span class="label label-success">Success</span></h3><h4>Example heading
                                            &nbsp;<span class="label label-warning">Warning</span></h4><h5>Example heading
                                            &nbsp;<span class="label label-info">Info</span></h5><h6>Example heading
                                            &nbsp;<span class="label label-danger">Danger</span></h6></div>
                                    <div class="col-lg-6"><h3>Badges</h3><span class="badge badge-default">Default</span>&nbsp;<span class="badge badge-primary">Primary</span>&nbsp;<span class="badge badge-success">Success</span>&nbsp;<span class="badge badge-warning">Warning</span>&nbsp;<span class="badge badge-info">Info</span>&nbsp;<span class="badge badge-danger">Danger</span>

                                        <div class="mbxl"></div>
                                        <h3>Badge Colors</h3><span class="badge badge-red">Red</span>&nbsp;<span class="badge badge-orange">Orange</span>&nbsp;<span class="badge badge-green">Green</span>&nbsp;<span class="badge badge-yellow">Yellow</span>&nbsp;<span class="badge badge-blue">Blue</span>&nbsp;<span class="badge badge-pink">Pink</span>&nbsp;<span
                                                class="badge badge-violet">Violet</span>&nbsp;<span class="badge badge-grey">Grey</span>&nbsp;<span class="badge badge-dark">Dark</span>

                                        <div class="mtxl"></div>
                                        <h3>Badges List Navigations</h3>
                                        <ul style="max-width: 260px;" class="nav nav-pills nav-stacked">
                                            <li class="active"><a href="#"><span class="badge pull-right">2</span>Home</a></li>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#"><span class="badge badge-warning pull-right">3</span>Messages</a></li>
                                        </ul>
                                        <div class="mtxl"></div>
                                        <h3>Badge In Pill</h3>
                                        <ul class="nav nav-pills">
                                            <li class="active"><a href="#">Home
                                                &nbsp;<span class="badge badge-green">3</span></a></li>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Messages
                                                &nbsp;<span class="badge badge-info">3</span></a></li>
                                        </ul>
                                        <div class="mbxl"></div>
                                        <h3>Badge With Button Dropdown</h3>

                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Account
                                                &nbsp;<i class="fa fa-angle-down"></i></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="#">Action<span class="badge badge-yellow pull-right">5</span></a></li>
                                                <li><a href="#">Another action<span class="badge badge-info pull-right">3</span></a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                        &nbsp;
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Chats</button>
                                            <button type="button" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" class="btn btn-primary dropdown-toggle"><i class="fa fa-angle-down"></i></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><span class="label label-warning">7:00 AM</span>&nbsp;
                                                    Hi :)</a></li>
                                                <li><a href="#"><span class="label label-warning">8:00 AM</span>&nbsp;
                                                    How are you?</a></li>
                                                <li><a href="#"><span class="label label-warning">9:00 AM</span>&nbsp;
                                                    What are you doing?</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="text-center">View All</a></li>
                                            </ul>
                                        </div>
                                        &nbsp;
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" class="btn btn-primary dropdown-toggle">Inbox
                                                &nbsp;<span class="badge badge-yellow">25</span></button>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="#"><span class="label label-info"><i class="fa fa-bell"></i></span>&nbsp;
                                                    Favourites Snippet</a></li>
                                                <li><a href="#"><span class="label label-red"><i class="fa fa-magic"></i></span>&nbsp;
                                                    Email marketing</a></li>
                                                <li><a href="#"><span class="label label-yellow"><i class="fa fa-bullhorn"></i></span>&nbsp;
                                                    Subscriber focused email design</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" class="text-center">View All</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="pagination-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4"><h3>Pagination</h3>
                                        <ul class="pagination mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <div class="mbxl"></div>
                                        <h3>Disabled and active states</h3>
                                        <ul class="pagination mtm mbm">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Size</h3>
                                        <ul class="pagination pagination-lg mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <ul class="pagination mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <ul class="pagination pagination-sm mtm mbm">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Pagination Align</h3>
                                        <ul data-hover="" class="pagination mtm mbm">
                                            <li class="disabled"><a href="#">&laquo;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                        <div class="text-center">
                                            <ul class="pagination mtm mbm">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li class="active"><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                        <div class="text-right">
                                            <ul class="pagination mtm mbm">
                                                <li><a href="#">&laquo;</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li class="active"><a href="#">5</a></li>
                                                <li class="disabled"><a href="#">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-lg-4"><h3>Pager</h3>
                                        <ul class="pager">
                                            <li><a href="#">Previous</a></li>
                                            <li><a href="#">Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Pager Aligned Links</h3>
                                        <ul class="pager">
                                            <li class="previous"><a href="#">&larr; Older</a></li>
                                            <li class="next"><a href="#">Newer &rarr;</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h3>Pager Optional Disabled State</h3>
                                        <ul class="pager">
                                            <li class="previous disabled"><a href="#">&larr; Older</a></li>
                                            <li class="next"><a href="#">Newer &rarr;</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="input-group-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4"><h4 class="box-heading">Input Group</h4>

                                        <div class="input-group"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><input type="text" class="form-control"/><span class="input-group-addon">.00</span></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><span class="input-group-addon">$</span><input type="text" class="form-control"/><span class="input-group-addon">.00</span></div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Size</h4>

                                        <div class="input-group input-group-lg"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group input-group-sm"><span class="input-group-addon">@</span><input type="text" placeholder="Username" class="form-control"/></div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Checkboxes & Radio Addons</h4>

                                        <div class="input-group"><span class="input-group-addon"><input type="checkbox"/></span><input type="text" class="form-control"/></div>
                                        <div class="mbl"></div>
                                        <div class="input-group"><span class="input-group-addon"><input type="radio"/></span><input type="text" class="form-control"/></div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-lg-6"><h4 class="box-heading">Buttons with dropdowns</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action
                                                            &nbsp;<span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control"/></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group"><input type="text" class="form-control"/>

                                                    <div class="input-group-btn">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action
                                                            &nbsp;<span class="caret"></span></button>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Segmented Buttons</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <div class="input-group-btn">
                                                        <button type="button" tabindex="-1" class="btn btn-default">Action</button>
                                                        <button type="button" data-toggle="dropdown" tabindex="-1" class="btn btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                                        <ul role="menu" class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control"/></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-group"><input type="text" class="form-control"/>

                                                    <div class="input-group-btn">
                                                        <button type="button" tabindex="-1" class="btn btn-default">Action</button>
                                                        <button type="button" data-toggle="dropdown" tabindex="-1" class="btn btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6"><h4 class="box-heading">Button Addons On Both Sides</h4>

                                        <div class="input-group"><span class="input-group-btn"><button type="button" class="btn btn-default">Go!</button></span><input type="text" class="form-control"/><span class="input-group-btn"><button type="button" class="btn btn-default">Go!</button></span></div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Buttons With Dropdowns On Both Sides</h4>

                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                            <input type="text" class="form-control"/>

                                            <div class="input-group-btn">
                                                <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Action <span class="caret"></span></button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="list-group-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-4"><h4 class="box-heading">Basic</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                        </ul>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Contextual classes</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Badges</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active">Cras justo odio<span class="badge badge-info pull-right">4</span></a><a href="#" class="list-group-item">Dapibus ac facilisis in<span class="badge badge-warning pull-right">2</span></a><a href="#" class="list-group-item">Morbi leo risus<span
                                                class="badge badge-danger pull-right">3</span></a><a href="#" class="list-group-item">Porta ac consectetur ac<span class="badge badge-info pull-right">8</span></a><a href="#" class="list-group-item">Vestibulum at eros<span class="badge badge-success pull-right">1</span></a><a href="#" class="list-group-item">Morbi leo risus<span
                                                class="badge badge-danger pull-right">5</span></a></div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Contextual classes with '.active'</h4>

                                        <div class="list-group"><a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a><a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a><a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a><a href="#" class="list-group-item list-group-item-danger">Vestibulum at
                                            eros</a></div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Linked Items</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active">Cras justo odio</a><a href="#" class="list-group-item">Dapibus ac facilisis in</a><a href="#" class="list-group-item">Morbi leo risus</a><a href="#" class="list-group-item">Porta ac consectetur ac</a><a href="#" class="list-group-item">Vestibulum at eros</a><a href="#"
                                                                                                                                                                                                                                                                                                                                                                                class="list-group-item">Morbi
                                            leo risus</a></div>
                                        <div class="mbxl"></div>
                                        <h4 class="box-heading">Custom Content</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active"><h4 class="list-group-item-heading">List group item heading</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">List group item heading</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">List group item heading</h4>

                                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p></a></div>
                                    </div>
                                </div>
                            </div>
                            <div id="navbar-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Default Navbar</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                                    <ul class="nav navbar-nav">
                                                        <li class="active"><a href="#">Link</a></li>
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">One more separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <form role="search" class="navbar-form navbar-left">
                                                        <div class="form-group"><input type="text" placeholder="Search" class="form-control"/></div>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-green">Submit</button>
                                                    </form>
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Forms</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
                                                    <form role="search" class="navbar-form navbar-left">
                                                        <div class="form-group"><input type="text" placeholder="Search" class="form-control"/></div>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-green">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Buttons</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-3" class="collapse navbar-collapse">
                                                    <button type="button" class="btn btn-green navbar-btn">Sign in</button>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Text</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-4" class="collapse navbar-collapse"><p class="navbar-text">Signed in as Mark Otto</p></div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h4 class="box-heading">Non-nav links</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-5" class="collapse navbar-collapse"><p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p></div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><h4 class="block-heading">Navbar</h4>
                                        <nav role="navigation" class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <div class="navbar-header">
                                                    <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                                    <a href="#" class="navbar-brand">Brand</a></div>
                                                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                                    <ul class="nav navbar-nav">
                                                        <li class="active"><a href="#">Link</a></li>
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">One more separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                    <form role="search" class="navbar-form navbar-left">
                                                        <div class="form-group"><input type="text" placeholder="Search" class="form-control"/></div>
                                                        &nbsp;
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li><a href="#">Link</a></li>
                                                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown<b class="caret"></b></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                        <div class="panel">
                                            <div class="panel-body"><h4>Home</h4>

                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.
                                                    Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="thumbnail-tab" class="tab-pane fade"><h4 class="box-heading">Default Thumbnails</h4>

                                <div class="row">
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                    <div class="col-sm-6 col-md-3"><a href="#" class="thumbnail"><img data-src="holder.js/300x180/text:hello"/></a></div>
                                </div>
                                <h4 class="box-heading">Custom Content</h4>

                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello"/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello"/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello"/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail"><img data-src="holder.js/300x200/text:hello" alt="..."/>

                                            <div class="caption"><h3>Thumbnail label</h3>

                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                                <p><a href="#" role="button" class="btn btn-primary">Button</a>&nbsp;<a href="#" role="button" class="btn btn-default">Button</a></p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="other-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6"><h4 class="box-heading">Tooltip</h4>
                                        <button type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left" class="btn btn-default">Tooltip on left</button>
                                        &nbsp;
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="btn btn-default">Tooltip on top</button>
                                        &nbsp;
                                        <button type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" class="btn btn-default">Tooltip on bottom</button>
                                        &nbsp;
                                        <button type="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right" class="btn btn-default">Tooltip on right</button>
                                    </div>
                                    <div class="col-lg-6"><h4 class="box-heading">Popovers</h4>
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on left</button>
                                        &nbsp;
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on top</button>
                                        &nbsp;
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on bottom</button>
                                        &nbsp;
                                        <button type="button" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." class="btn btn-default">Popover on right</button>
                                    </div>
                                </div>
                                <div class="mbxl"></div>
                                <div class="row">
                                    <div class="col-lg-4"><h4 class="box-heading">Large Well</h4>

                                        <div class="well well-lg">Look, I'm in a large well!</div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Default Well</h4>

                                        <div class="well">Look, I'm in a well!</div>
                                    </div>
                                    <div class="col-lg-4"><h4 class="box-heading">Small Well</h4>

                                        <div class="well well-sm">Look, I'm in a small well!</div>
                                    </div>
                                </div>
                                <div class="mbxl"></div>
                                <div class="row">
                                    <div class="col-lg-6"><h4 class="box-heading">Media object</h4>

                                        <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                            <div class="media-body"><h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                        </div>
                                        <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                            <div class="media-body"><h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                    <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6"><h4 class="box-heading">Media List</h4>
                                        <ul class="media-list">
                                            <li class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                <div class="media-body"><h4 class="media-heading">Media heading</h4>

                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                                    <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                        <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                            <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                                <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media"><a href="#" class="pull-left"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                        <div class="media-body"><h4 class="media-heading">Nested media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media"><a href="#" class="pull-right"><img data-src="holder.js/64x64/text:avatar" alt="64x64" class="media-object"/></a>

                                                <div class="media-body"><h4 class="media-heading">Media heading</h4>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</div>
                                            </li>
                                        </ul>
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
