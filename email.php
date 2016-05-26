<?php 
    // Стандартный набор для всех страниц
   include_once("mainstart.php");
?> 

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Корреспандеция бумажной почты</title>
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
<?php $protokol = 'Отслеживание отправленых писем'; include_once("analyticstracking.php") ?>
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
                                Изменения в договоре, consectetur adipiscing elit. Sed eleifend et nisl eget
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
                            Отслеживание бумажной корреспонденции</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Extras</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Extras</li>
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
                    <div class="col-sm-3 col-md-2">
                        <div class="btn-group btn-group-sm">
                            <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Почта
                                &nbsp;<span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Электронная почта</a></li>
                                <li><a href="#">Контакты</a></li>
                                <li><a href="#">Задачи</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default"><input type="checkbox" style="margin: 0; vertical-align: middle;" class="checkall"/></button>
                            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Все документы</a></li>
                                <li><a href="#">Задачи для Вас</a></li>
                                <li><a href="#">Задачи от Вас</a></li>
                                <li><a href="#">Просроченные</a></li>
                                <li><a href="#">Важные</a></li>
                                <li><a href="#">Архивные</a></li>
                            </ul>
                        </div>
                        <button type="button" data-toggle="tooltip" title="Обновить" class="btn btn-default mls mrs"><span class="fa fa-refresh"></span></button>
                        <div class="btn-group">
                            <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Действия с почтой
                                &nbsp;<span class="caret"></span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#">Пометить все как выполеныные</a></li>
                                <li class="divider"></li>
                                <li class="text-center pbm">
                                    <small class="text-muted">Напомнить о сроках</small>
                                </li>
                            </ul>
                        </div>
                        <div class="pull-right"><span class="text-muted"><b>1</b>&nbsp; – &nbsp;<b>50</b>&nbsp; of &nbsp;<b>277</b></span>

                            <div class="btn-group mlm">
                                <button type="button" class="btn btn-default">123<span class="fa fa-chevron-left"></span></button>
                                <button type="button" class="btn btn-default">123<span class="fa fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="mtl mbl"></div>
                 <div class="row">
                    <div class="col-sm-3 col-md-2"><a href="#" role="button" class="btn btn-danger btn-sm btn-block">МОИ ДОКУМЕНТЫ</a>

                        <div class="mtm mbm"></div>
                        <div class="panel">
                            <div class="panel-body pan">
                                <ul style="background: #fff" class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="#"><span class="badge pull-right">42</span><i class="fa fa-inbox fa-fw mrs"></i>Входящие</a></li>
                                    <li><a href="#"><i class="fa fa-star-o fa-fw mrs"></i>Подготовка</a></li>
                                    <li><a href="#"><i class="fa fa-info-circle fa-fw mrs"></i>Для ответа</a></li>
                                    <li><a href="email.php?kod=out"><i class="fa fa-plane fa-fw mrs"></i>Отправленные</a></li>
                                    <li><a href="#"><span class="badge badge-orange pull-right">3</span><i class="fa fa-edit fa-fw mrs"></i>Черновики</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr/>
                        <div class="panel">
                            <div class="panel-body pan">
                                <ul style="background: #fff" class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="#">Статус письма</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-yellow pull-right"></i>Домашнии</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-success pull-right"></i>Рабочии</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-red pull-right"></i>Семейные</a></li>
                                    <li><a href="#"><i class="fa fa-circle text-muted pull-right"></i>Другие</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                         <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab"><span class="fa fa-inbox"></span>&nbsp;
                                Личные</a></li>
                            <li><a href="#profile" data-toggle="tab"><span class="fa fa-user"></span>&nbsp;
                                Социальные</a></li>
                            <li><a href="#messages" data-toggle="tab"><span class="fa fa-tags"></span>&nbsp;
                                Объщие</a></li>
                            <li><a href="#settings" data-toggle="tab"><span class="fa fa-plus man"></span></a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="list-group mail-box">
                                
                                
                                
<?php                              
        $userstable = "latermail";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE 1=1";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
        $Obrashen = $row[adrespoluch];
        $koment   = $row[koment];
        //$Obrashen = '111'; 
        //$Obrashen = 'uiu';                                                                     
                                                                                
                                 echo'<a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">'.$Obrashen.'</span><span>Счет на оплату</span>&nbsp; -';
                                    
                                echo' &nbsp;<span style="font-size: 11px;" class="text-muted">'.$koment.'</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a>';
?>                                
<?php                                                                                  
       }
?>                                        
                                        
                                        </div>
                            </div>

<?php                                                                                  

$mailhref  = "http://www.mailvirtual.ru/later.php?edit=53";
$mailadres = "Восточная 27 кв 9";
$mailTitle = "Тема письма";
$mailMain  = "Очень главное";
$mailData  = "12:01 AA";

      
?>



                            <div id="profile" class="tab-pane fade in">
                                <div class="list-group mail-box">

<?php
						$userstable = "latermail";
                                                mysql_select_db($dbName); 
                                                $query = "SELECT * FROM $userstable WHERE 1=1 ";
                                                $res = mysql_query($query) ;  
                                                while ($row=mysql_fetch_array($res)) 
                                                {  
						
?>                            


<a href="<?php $mailhref ?>" 
class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name"><?php echo $row[adrespoluch] ?></span><span><?php echo $row[koment] ?></span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted"><?php echo $row[koment] ?></span><span class="time-badge"><?php echo $mailData ?></span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a>


<?php
}
?>


			     </div>
                            </div>







                            <div id="messages" class="tab-pane fade in">
                                <div class="list-group mail-box"><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                        style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Изменения в договоре</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#"
                                                                                                                                                                                                                                                                                                                                                                                                       class="list-group-item"><input
                                        type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span
                                        class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;"
                                                                                                                                                                                                                                                                                                                                                                                     class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                        style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                        class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                        style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                        class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a></div>
                            </div>
                            <div id="settings" class="tab-pane fade in">
                                <div class="list-group mail-box"><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Изменения в договоре</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                        style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                        class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                        style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                        class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                        style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                        class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span
                                        class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; -
                                    &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a><a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span
                                        style="min-width: 120px; display: inline-block;" class="name">Купинов Вадим</span><span>Счет на оплату</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Согласно договору об обслуживании ...</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span
                                        class="fa fa-paperclip"></span></span></a></div>
                            </div>
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
