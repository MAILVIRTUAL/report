
<?php 
   // Стандартный набор для всех страниц
   session_start();
  
   $metkahorvop = "no";
   $comand   = $_GET ['com'];
   if ($comand == 'out')
   {
   $_SESSION['Login']   = "";
   $_SESSION['Password']= "";
   }  
   include_once("connect.php");

   $qvest   = $_GET ['qvest'];
   $tema   = $_GET  ['tema'];

   if (isset($_GET['qvest']))
   {

     mysql_select_db($dbName) or die(mysql_error()); 
     $query = "INSERT INTO yrvopros (title,opis) VALUES ('".$tema."','".$qvest."')";
     $res = mysql_query($query);
     echo ($query);
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
    
    $protokol = 'Юрист';


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
    <title>Юридические услуги</title>
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
                            Юридические услуги</div>
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
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Задать вопрос</a></li>
                            <li><a href="#thumbnail-tab" data-toggle="tab">Заказать звонок</a></li>             
                            <li><a href="#label-badge-tab" data-toggle="tab">Заказать документ</a></li>
                            <li><a href="#pagination-tab" data-toggle="tab">Каталог юристов и адвокатов</a></li>
                            <li><a href="#input-group-tab" data-toggle="tab">Шаблоны документов</a></li>
                            <li><a href="#list-group-tab" data-toggle="tab">Наши ответы</a></li>
                           
                            
                            
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="alert-tab" class="tab-pane fade in active">
                                <div class="row">

                                    <form action="#" class="form-horizontal"><h3>Задайте свой вопрос юристу.</h3>



<?php  
if ($metkahorvop == "yes")
{
?>
<div class="note note-success"><h4 class="box-heading">Вопрос успешно отправлен.</h4>

 <p>Ваш запрос всем юристам на сайте. Через некоторое время вы сможете оценить полученные ответы присланные Вам по почте и на нашес сайте выбрав наилутшего.</p></div>

<?php
}
?>

                                    <div > 
          <h4>Чтобы задать вопрос юристу онлайн, вам потребуется всего несколько минут. Наши специалисты ответят в кратчайшие сроки и подскажут, как правильно поступить в вашей ситуации. Доверьте решение своей проблемы квалифицированным юристам!
Узнайте больше о политике защиты наших клиентов.</h4>
                                        
<a href="help.php"><button type="submit" class="btn btn-primary">Как это работает?</button></a>



<div class="form-group"><label class="col-sm-3 control-label">Ваш вопрос юристу</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>


                                           <div class="form-group">  <label class="col-sm-3 control-label">Подробное описание ситуации</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea name = "qvest" rows="14" class="form-control"></textarea></div>
                                                    </div>
                                                </div>
                                            </div>                                       


                                          

					    <div class="form-group"><label class="col-sm-3 control-label">Вы задаете вопрос как?</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select class="form-control">
                                                            <option>Частное лицо</option>
                                                            <option>Представитель бизнеса</option>
                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>


                                            


                                            


					    <div class="form-group"><label class="col-sm-3 control-label">Категория права</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select class="form-control">

<option>Конституционное право</option>
<option>Гражданское право</option>
<option>Договорное право</option>
<option>Право собственности</option>
<option>Взыскание задолженности</option>
<option>Кредитование</option>
<option>Семейное право</option>
<option>Заключение и расторжение брака</option>
<option>Алименты</option>
<option>Раздел имущества</option>
<option>Усыновдение, опека и попечительство</option>
<option>Недвижимость</option>
<option>Жилищное право</option>
<option>Ипотека</option>
<option>ЖКХ</option>
<option>Деловое участие в строительстве</option>
<option>Приватизация</option>
<option>Земельное право</option>
<option>Трудовое право</option>
<option>Защита прав работников</option>
<option>Защита прав работодателя</option>
<option>Защита прав потребителей</option>
<option>Нотариат</option>
<option>Наследство</option>
<option>Уголовное право</option>
<option>Наркотики</option>
<option>Медицинское право</option>
<option>Административное право</option>
<option>Произвол чиновников</option>
<option>Военное право</option>
<option>Защита прав призывников</option>
<option>Автомобильное право</option>
<option>ДТП,ГИБДД,ПДД</option>
<option>Лишение водительских прав</option>
<option>Социальное обеспечение</option>
<option>Пенсии и пособия</option>
<option>Гарантии, льготы, компенсации</option>
<option>Страхование</option>
<option>ОСАГО, Каско</option>
<option>Гражданство</option>
<option>Миграционное право</option>
<option>Исполнительное производство</option>
<option>Арбитраж</option>
<option>Предпринимательское право</option>
<option>Тендеры, контрактная система в сфере закупок</option>
<option>Корпоративное право</option>
<option>Регистрация юридических лиц</option>
<option>Банкротство</option>
<option>Налоговое право</option>
<option>Таможенное право</option>
<option>Бухгалтерский учет</option>
<option>Лицензирование</option>
<option>Интеллектуальная собственность</option>
<option>Авторские и смежные права</option>
<option>Товарные знаки, патенты</option>
<option>Интернет и право</option>
<option>Программы ЭВМ и базы данных</option>
<option>Международное право</option>



                                                            
                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>





                                           <div class="form-group">  <label class="col-sm-3 control-label">Если нужно, прикрепите файл</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="file" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  
                                        
                                         



                                           <div class="form-group">  <label class="col-sm-3 control-label">Имя</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  



                                           <div class="form-group">  <label class="col-sm-3 control-label">Электронная почта*</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  

				            <div class="form-group">  <label class="col-sm-3 control-label">Телефон</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class="form-group">  <label class="col-sm-3 control-label">Город</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  

                                         



					    <div class="form-group"><label class="col-sm-3 control-label">Тип вопроса</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select class="form-control">
                                                            <option>Бесплатный</option>
                                                            <option>Платный</option>
                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>




					Моментальная публикация вопроса <BR>
					Гарантия получения ответа, полный и подробный разбор ситуации<BR>
					Первый ответ в течение 15 минут<BR>
					Мнения нескольких юристов<BR>
					Неограниченное количество дополнительных вопросов и уточнений<BR>
					Возможность скрыть вопрос от других пользователей и поисковых систем<BR>
					Гарантия возврата денег, если вас не устроит качество консультации<BR>

						<BR><BR>


					Публикация вопроса в порядке очереди<BR>
					Гарантии ответа нет<BR>
  

                                        <button type="submit" class="btn btn-green btn-block">Отправить вопрос </button>
                                        </form>
                                       


                                    </div>
                                    
                                </div>
                            </div>
                            <div id="note-tab" class="tab-pane fade">
                                
                            </div>
                            <div id="label-badge-tab" class="tab-pane fade">
                                <div class="row">



                                   <h4 class="box-heading">Подготовка документов</h4>

Вам нужно составить иск или претензию? Подготовить договор? Зарегистрировать ООО?
Оставьте заявку на сайте и получите предложения от юристов со всей России. Бесплатно!


3 причины
оставить заявку


    Это бесплатно
    Вы оставляете заявку абсолютно
    бесплатно и ничего не теряете, если
    никто из юристов вам не подойдет.
    У вас появится выбор
    Вы сравниваете предложения
    разных юристов и выбираете самые
    выгодные условия.
    Мы на вашей стороне
    Если вы останетесь недовольны
    результатом, напишите нам, и мы
    вернем вам деньги!



     

Опишите документ, который вам нужен,
и отправьте заявку. Это абсолютно бесплатно
и займет не больше пяти минут.

Заинтересованные юристы в течение
10-15 минут предложат вам свои услуги
и сориентируют по стоимости.
     

Выберите юриста, который предложит
самые выгодные условия, и начните
работу!






  
                                       <h4 class="box-heading">Какой документ вам нужен?</h4>
                                        <div>
              
<a href="#" class="list-group-item"><h4 class="list-group-item-heading">Регистрация бизнеса.</h4><p class="list-group-item-text">Комплекты документов для регистрации ООО, ИП, ТСЖ и др.</p></a>


<a href="#" class="list-group-item"><h4 class="list-group-item-heading">Договоры и соглашения</h4><p class="list-group-item-text">Договоры аренды, подряда, купли-продажи, займа, комиссии и др.</p></a>


<a href="yrpravdok.php" class="list-group-item"><h4 class="list-group-item-heading">Документы в суд.</h4>
<p class="list-group-item-text">Исковое заявление, отзыв на исковое заявление, ходатайство,жалоба на решение суда и др.</p></a>


<a href="yrpravdok.php" class="list-group-item"><h4 class="list-group-item-heading">Претензии потребителей.</h4>
<p class="list-group-item-text">Претензии на возврат денег за товар. Претензии в страховую, в банк, к ЖКХ и др.</p></a>


<a href="yrpravdok.php" class="list-group-item"><h4 class="list-group-item-heading">Другое.</h4>
<p class="list-group-item-text">Любой другой документ. Вы можете описать его самостоятельно.</p></a>


</div>

  
                                </div>
                            </div>





                            <div id="pagination-tab" class="tab-pane fade">
                                <div class="row">
                                    


<!--РАЗДЕЛ ЮРИСТЫ-->


                 
<?php  $blokpic01 = 'licen.jpg' ?>
<?php  $blokpic02 = 'licen.jpg' ?>
<?php  $blokpic03 = 'licen.jpg' ?>
<?php  $blokpic04 = 'licen.jpg' ?>


<?php  
	$userstable = "user";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE `prof` = 'Юрист' ";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
            $Obrashen = $row[FirstName]." ".$row[LastName];
?>       		

<?php
$blokpic01 = $row[fotoklienta];
$maintitle01 = $row[opisprof];
$idblok01    = $row[id];

$Avtor01 = $row[FirstName]." ".$row[LastName];
$prof01  = $row[prof];

?>

<div class="col-lg-3">
<?php echo '<div class="member-team"><img src="/upload/'.$blokpic01.'" class="img-responsive"/>'; ?>
<?php echo '<h3>'.$Avtor01; ?>
<?php echo '<small>>'.$prof01.'</small>';?>
                  </h3>
<?php echo ('<p>'.$maintitle01.'<a href="bloknew.php?idnew='.$idblok01.'"><br><br>Подробнее...<br><br></a>');?>   


<ul class="social-icons list-unstyled list-inline mbl mtl">
                                                        <li><a href="#" data-hover="tooltip" data-original-title="facebook" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="google Plus" class="googleplus"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="skype" class="skype"><i class="fa fa-skype"></i></a></li>
                                                        <li><a href="#" data-hover="tooltip" data-original-title="twitter" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                    </ul>
                               
                  </div>
                  </div>
                      

<?php
 	}
?>

                            </div>
                                <hr/>
                                <div class="row">
                                    
                                </div>
                            </div>
                            <div id="input-group-tab" class="tab-pane fade">












                                <div class="row">
                                    
<h4 class="box-heading">База данных шаблонов документов</h4>
<div class="list-group"><a href="#" class="list-group-item active"><h4 class="list-group-item-heading">Название документа</h4>
<p class="list-group-item-text">Описание документа</p>

</a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Жалобы</h4>
                                            <p class="list-group-item-text">Каждый человек наверняка сталкивался с такой проблемой, когда необходимо правильно составить и подать жалобу либо иной документ в органы государственной власти. И зачастую от правильности составления, а не самого смысла жалобы, зависит ответ на них.</p>


</a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Заявления</h4>

                                            <p class="list-group-item-text">Заявление – это документ, который содержит просьбу о зачислении на работу, переводе на другую должность, увольнении, предоставлении отпуска либо отгула.</p>



</a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Контракт, Договор </h4>

                                            <p class="list-group-item-text">Наш сайт представляет собой базу типовых договор, примеров договоров конкретных компаний, а также бланки договоров. Помимо договоров на сайте выложена база бланков различных нормативных документов и других бланков.
Договор это основной документ гражданского права, он юридически закрепляет взаимоотношения между субъектами.</p>

</a>

<a href="#" class="list-group-item"><h4 class="list-group-item-heading">Официальные письмо</h4>

                                            <p class="list-group-item-text">Чтобы составить хорошее, информативное письмо необходимо уделить особое внимание его форме и содержанию.
Для официальных писем используют специальные бланки, которые соответствуют стандарту. Они содержат обязательные реквизиты, расположенные в определенном порядке. </p></a>


<a href="yrpravdok.php" class="list-group-item"><h4 class="list-group-item-heading">Защита прав и свобод граждан в сфере информационных технологий</h4>

      <p class="list-group-item-text">В данном разделе публикуются документы, регламентирующие правовые нормы в сфере использования программного обеспечения. </p></a>

</div>

                                </div>
                                <hr/>
                             </div>
                            <div id="list-group-tab" class="tab-pane fade">










                                <div class="row">
                                    


<h4 class="box-heading">Провериные временем бланки документов</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active"><h4 class="list-group-item-heading">Название документа</h4>

                                            <p class="list-group-item-text">Описание документа.</p></a>



<a href="#" class="list-group-item"><h4 class="list-group-item-heading">Письмо для отмены правонарушения ГИБДД</h4>

                                            <p class="list-group-item-text">Постановлением об административном правонарушении вам выписали штраф или же вовсе лишили прав управления транспортным средством.</p></a>





<a href="#" class="list-group-item"><h4 class="list-group-item-heading">Жалоба на дествия сотрудников почты</h4>

                                            <p class="list-group-item-text">Клиенты часто недовольны скоростью доставки писем, посылок, путаницей адресов доставки и доставление грузов во вскрытом виде, либо в очень поврежденном состоянии упаковки.</p></a>



<a href="#" class="list-group-item"><h4 class="list-group-item-heading">Письмо в администрацию города 'О искуственном ограничении движения'</h4>

                                            <p class="list-group-item-text">Образец письма об отмене лежащего полицейского .</p></a></div>















                                   
                                    
                                </div>
                            </div>




                            <div id="navbar-tab" class="tab-pane fade">
                                <div class="row">
                                </div>
                            </div>
                            <div id="thumbnail-tab" class="tab-pane fade"><h4 class="box-heading">Проконсультируйтесь с юристом по телефону</h4>


<h4>Теперь, для того чтобы получить консультацию, вам даже не придется выходить из дома. На Правовед.ru вы можете связаться с юристом по телефону из любого региона России. Это гораздо дешевле и быстрее, чем в обычной юридической фирме. </h4>


                                <div class="row">
                                    


                                            <div class="form-group"><label class="col-sm-3 control-label">Тип вопроса</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select class="form-control">
                                                            <option>Бесплатный</option>
                                                            <option>Платный</option>
                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>

					   	
       					    <BR>

					    <div class="form-group"><label class="col-sm-3 control-label">Ваш вопрос юристу</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>

					   <BR>

                                           <div class="form-group">  <label class="col-sm-3 control-label">Подробное описание ситуации</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea name = "qvest" rows="14" class="form-control"></textarea></div>
                                                    </div>
                                                </div>
                                           </div>                                       
						
					  <BR>

 				          <div class="form-group">  <label class="col-sm-3 control-label">Если нужно, прикрепите файл</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="file" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  
                                        
                                         



                                           <div class="form-group">  <label class="col-sm-3 control-label">Имя</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  



                                           <div class="form-group">  <label class="col-sm-3 control-label">Электронная почта*</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  

				            <div class="form-group">  <label class="col-sm-3 control-label">Телефон</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>  

                                            <div class="form-group">  <label class="col-sm-3 control-label">Город</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="" class="form-control"/></div>
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
