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
    
    $protokol = 'Карта';
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
    // Описание карты сайта 
   if (isset($_GET ['opis']))
   {
    $opis = $_GET ['opis'];
    $userstable = "maplist";
    mysql_select_db($dbName); 
    $query = "SELECT * FROM $userstable WHERE id=".$opis." ";
    $res = mysql_query($query) ;  
    while ($row=mysql_fetch_array($res)) 
        {
          $tehpod  = $row [tehpod]; 
          $opisvop = $row [opisvop];  
          //$opisvop = '---------------------';  
          
          //if ($opis == '7')
          //{
          
            //$yr = $_GET ['yr'];
            //$userstableYr = "user";
            //mysql_select_db($dbName); 
            //$queryYr = "SELECT * FROM $userstable WHERE id = ".$yr." ";
            //$resYr = mysql_query($queryYr) ;  
            //while ($rowYr=mysql_fetch_array($resYr)) 
            //{
                //$ObrashenYr = $rowYr[FirstName]." ".$rowYr[LastName];
	              //$fotoklientaYr = $row[fotoklienta];
                //$opisvop = $ObrashenYr;
            //} 
            
          
          
          //}                               
        }
   } 
   else
   {
          $tehpod  = 'Выберите меню для подробного описания'; 
          $opisvop = 'Карта сайта. Подробное меню для удобной навигации по сайту.';                
   }
  
?> 

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Карта сайта</title>
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
                     <?php include_once("find.php") ?>
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
                            Карта сайта</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dropdown</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Карта сайта</li>
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
                            <div class="panel-body"><h4 class="block-heading">Карта сайта</h4>
                            
                            
Справка о сайте mailvirtual.ru.  Издателем проекта является компания «mailvirtual». Ориентирован на Компании и Частные лица, на Рекламодателей, Менеджеров по рекламе, Менеджеров высшего и среднего звена, Владельцам крупного и Среднего бизнеса.
Люди находящиеся на сайте публикуют свои объявления и новости в сообщества, создают группы и личные страницы читают и просматривают объявления от компаний и частных лиц, ищут работу, товары и различные услуги, с возможностью прямого общения с друзьями и потенциальными клиентами, объединёнными в различные группы по интересам.
Все Ваши вопросы, идеи, предложения, а так же отзывы можете отправить нам на почту заполнив простую форму ниже. Цель проекта – Неограниченная подача и поднятия объявлений бесплатно для всех пользователей нашего сайта!
                            
                            
                                 
                                 <div id="nestable" class="dd">                                
                                    <ol class="dd-list">
                                       <li data-id="1" class="dd-item">
                                       
                                       
                                          
                                          
                                          <div class="dd3-content"><a href="karta.php?opis=1">Главная</a></div>
                                          
                                             
                                       </li>                                                                                                                          
                                       <li data-id="1" class="dd-item"> 
                                          <div class="dd3-content"><a href="karta.php?opis=36">Документооборот</a></div>
                                       </li> 
                                        
                                        
                                                                             
                                        <li data-id="2" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=2">Юридические услуги</a></div>
                                            <ol class="dd-list"> 
                                                <li data-id="3" class="dd-item">  
                                                    <div class="dd3-content"><a href="karta.php?opis=3">Задать вопрос</a></div>
                                                </li>
                                                <li data-id="4" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=4">Заказать звонок</a></div>
                                                </li>
                                                <li data-id="4" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=5">Заказать документ</a></div>
                                                </li>
                                                <li data-id="5" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=6">Каталог юристов и адвокатов</a></div>
                                                    <ol class="dd-list">
  <?php                                                   
                                                     $userstable = "user";
                                                     mysql_select_db($dbName); 
                                                     $query = "SELECT * FROM $userstable WHERE prof = 'Юрист' ";
                                                     $res = mysql_query($query) ;  
                                                     while ($row=mysql_fetch_array($res)) 
                                                    {
                                                        $Obrashen = $row[FirstName]." ".$row[LastName];
                                                        echo '<li data-id="6" class="dd-item">';
                                                        echo '<div class="dd3-content"><a href="karta.php?opis=7&yr='.$row[id].'">'.$Obrashen.'</a></div>';
                                                        echo '</li>';

                                                    }  
 ?>                                                          
                                                    </ol>
                                                </li> 
                                                
                                                    <li data-id="5" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=1">Шаблоны документов</a></div>
                                                    <ol class="dd-list">
  <?php                                                   
                                                     $userstable = "yrdocall";
                                                     mysql_select_db($dbName); 
                                                     $query = "SELECT * FROM $userstable WHERE tipdoc = 'main' ";
                                                     $res = mysql_query($query) ;  
                                                     while ($row=mysql_fetch_array($res)) 
                                                    {
                                                       
                                                        echo '<li data-id="6" class="dd-item">';
                                                        echo '<div class="dd3-content"><a href="karta.php?opis=8">'.$row[titledoc].'</a></div>';
                                                        echo '</li>';

                                                    }  
 ?>                                                          
                                                    </ol>
                                                    </li>                                               
                                             <li data-id="4" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=1">Наши ответы</a></div>
                                                </li>
                                                
                                                                                               
                                            </ol>
                                          
                                        </li>
                                        
                                        <li data-id="2" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=9">Бухгалтерские услуги</a></div>
                                            <ol class="dd-list">
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=10">Подготовить документ</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=11">Наша бухгалтерия</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=12">Список Ваших документов</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=13">Шаблоны документов</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=14">Задать вопрос</a></div>
                                                </li>
                                            
                                            
                                            
                                            
                                            </ol>
                                          
                                        </li>
                                        
                                        
                                        
                                       
                                            
                                         
                                        
                                        
                                        
                                        <li data-id="1" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=1">Отправка бумажной кореспанденции</a></div>
                                            <ol class="dd-list">
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=15">Подготовить документ</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=16">База адресов</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=17">Список загруженных документов</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=18">Шаблоны документов</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=19">Задать вопрос</a></div>
                                                </li>
                                                
                                            </ol>                                      
                                        </li>
                                        

                                        <li data-id="1" class="dd-item">
                                            <div class="dd-handle">Фотографии</div>
                                            <ol class="dd-list">
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=20">Наши фотографии</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=21">Награды</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=22">Юмор</a></div>
                                                </li>                                                
                                            </ol>                                      
                                        </li>

                                        <li data-id="1" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=1">Каталог фирм, объявления, блоги, новости</a></div>
                                            <ol class="dd-list">
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=23">Новости</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=24">Блоги</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=25">Добавить блог</a></div>
                                                </li>                                                
                                            </ol>                                      
                                        </li>



                                  
                                        
                                        
                                       
                                        <li data-id="1" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=26">Наши достижения</a></div>
                                        </li>
                                        
                                        
                                        
                                 
                                        
                                        
                                        
                                        <li data-id="1" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=27">Карта сайта</a></div>
                                        </li>
                                        
                                        
                                        
                                      
                                        
                                        
                                        
                                        
                                        <li data-id="1" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=28">Дополнительные услуги</a></div>
                                            <ol class="dd-list">
						<li data-id="1" class="dd-item">
                                            	<div class="dd3-content"><a href="karta.php?opis=28">Сайты</a></div>
                                            	<ol class="dd-list">
							<li data-id="3" class="dd-item">
                                                    	<div class="dd3-content"><a href="karta.php?opis=101">Список электронныъ приемных</a></div>
                                                	</li>
							<li data-id="3" class="dd-item">
                                                    	<div class="dd3-content"><a href="karta.php?opis=102">Поиск картинок в интернете</a></div>
                                                	</li>
							<li data-id="3" class="dd-item">
                                                    	<div class="dd3-content"><a href="karta.php?opis=103">Поиск картинок в интернете</a></div>
                                                	</li>
							<li data-id="3" class="dd-item">
                                                    	<div class="dd3-content"><a href="karta.php?opis=104">Поиск картинок в интернете</a></div>
                                                	</li>


						</ol> 
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=29">Сайты</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=30">Фильмы</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=31">Изучение English</a> </div>
                                                </li>                                                
                                            </ol>                                      
                                         </li>
         
         
         
                                         <li data-id="1" class="dd-item">
                                            <div class="dd3-content"><a href="karta.php?opis=32">Програмное обеспеспение</a></div>
                                            <ol class="dd-list">
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=33">Описание</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=34">Скачать</a></div>
                                                </li>
                                                <li data-id="3" class="dd-item">
                                                    <div class="dd3-content"><a href="karta.php?opis=35">Тех. поддержка</a></div>
                                                </li>                                                
                                            </ol>                                      
                                         </li>
   
                                        
                                        
                                      
                                      
                                        
                                       

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Описание</h4>

                                       
                              <?php echo ($opisvop); ?>             

                                
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-body"><h4 class="block-heading">Помощь</h4>

                              <?php echo ($tehpod); ?> 
                                
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
