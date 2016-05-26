
<?php 
   // Стандартный набор для всех страниц
   session_start();
   include_once("connect.php");
   
    
   // ======  Передаем адрес для заполнения  ======
   if (isset($_GET['idad']))
   {
   $idad = $_GET['idad'];
   //if ($_SESSION['Login'] <> '' and $_SESSION['Password'] <> '')
   //{  
        $userstable = "lateradres";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE id = '".$idad."'";
        //echo $query;
        //echo $idad; 
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
          $opis   = $row [opis];
          $title  = $row [title];
          $adrespoluch = $opis;
          $fiopoluch   = $title;
          //$adrespoluch = '--------------------------';
          //$fiopoluch   = '--------------------------'; 
        
        }
        
    //}   
   }
  
  
   $metkahorvop = "no";
   $comand   = $_GET ['com'];
   if ($comand == 'out')
   {
   $_SESSION['Login']   = "";
   $_SESSION['Password']= "";
   }  
   
   $qvest   = $_GET ['qvest'];
   $tema   = $_GET  ['tema'];


 


   $otvet = "";
   $utoch = "";
   $Obrashen = "";
   $adrotpr   = "";
   // Вход с предудущий сесии установка переменных
   if ($_SESSION['Login'] <> '' and $_SESSION['Password'] <> '')
   {  
        $userstable = "user";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
            $Obrashen  = $row[FirstName]." ".$row[LastName];
            $idklienta = $row[id];
            $adrotpr   = $row[adrotpr];
            
	    //echo '-------------------------------------------';
            //echo $file01;
 
        }
        
    }
  

   // Создано письмо для отправки.
   if (isset($_POST['adrespoluch']))
   {
      $adrespoluch = $_POST ['adrespoluch'];
      $fiopoluch   = $_POST ['fiopoluch'];
      $adresotp    = $_POST ['adresotp'];
      $fiootprav   = $_POST ['fiootprav'];
      $pismo       = $_POST ['pismo'];
      $koment      = $_POST ['koment'];
      //$file01      = $_POST ['file01'];
       

      //echo $adrespoluch;      
      //echo $file01;
      //echo $_FILES['file01']['tmp_name'];		

      $uploaddir01 = '/var/www/html/klient/';
      $uploaddir02 = '/var/www/html/klient/';
      $uploaddir03 = '/var/www/html/klient/';
      //@mkdir("/var/www/html/upload/id", 0777);
      $uploadfile01 = $uploaddir01.basename($_FILES['file01']['name']);
      $uploadfile02 = $uploaddir02.basename($_FILES['file02']['name']);
      $uploadfile03 = $uploaddir03.basename($_FILES['file03']['name']);


      $uploadklient01 = $_FILES['file01']['name'];
      $uploadklient02 = $_FILES['file02']['name'];
      $uploadklient03 = $_FILES['file03']['name'];

      copy($_FILES['file01']['tmp_name'], $uploadfile01);
      copy($_FILES['file02']['tmp_name'], $uploadfile02);
      copy($_FILES['file03']['tmp_name'], $uploadfile03);


      // Записываем само письмо
      mysql_select_db($dbName) or die(mysql_error()); 
      $query = "INSERT INTO latermail (adrespoluch,fiopoluch,adresotp,fiootprav,pismo,koment,idklienta,file01,file02,file03) VALUES ('".$adrespoluch."','".$fiopoluch."','".$adresotp."','".$fiootprav."','".$pismo."','".$koment."','".$idklienta."','".$uploadklient01."','".$uploadklient02."','".$uploadklient03."')";


      $res = mysql_query($query);
      //echo ($query);
      if ($res == 'true')
      {
      //echo "Данные успешно обновлены.";
      //$metkahorvop = "yes";
      }
      else
      {
      echo "Данные не обновлены!";
      }
      
      // И Адрес для дальнейшего использования
      
      mysql_select_db($dbName) or die(mysql_error()); 
      $query = "INSERT INTO lateradres (title,opis) VALUES ('".$adrespoluch."','".$fiopoluch."')";


      $res = mysql_query($query);
      //echo ($query);
      if ($res == 'true')
      {
      //echo "Данные успешно обновлены.";
      //$metkahorvop = "yes";
      }
      else
      {
      echo "Данные не обновлены!";
      }

      
           
   } 

   // ОТКРЫВАЕМ РЕДАКТИРОВАНИЕ ПИСЬМА
   if (isset($_GET['edit']))
   {
   $NoverLater = $_GET['edit'];
   $userstable = "latermail";
   mysql_select_db($dbName); 
   $query = "SELECT * FROM $userstable WHERE id = '".$NoverLater."' and idklienta = '".$idklienta."'";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
            //$Obrashen  = $row[FirstName]." ".$row[LastName];
            //$idklienta = $row[id];
            $pismo = $row[pismo];
            $adrespoluch = $row[adrespoluch];
            $file01    = $row[file01];
            $file02    = $row[file02];
            $file03    = $row[file03];
            //echo $pismo;
        }
   } 

//<!-- MailVirtual Analytics -->
    
    $protokol = 'Письмо';


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
      		//$metkahorvop = "yes";
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
    <title>Отправка бумажной кориспанденции</title>
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
                            Отправка бумажной кориспанденции</div>
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
                        
                        
                        
                          
<?php                            
if ($comand == 'adres')
{
 echo '<li><a href="#alert-tab" data-toggle="tab">Подготовить документ</a></li>';
 echo ' <li class="active"><a href="#thumbnail-tab" data-toggle="tab">База адресов</a></li>';                                         
}    
else
{
 echo ' <li class="active"><a href="#alert-tab"     data-toggle="tab">Подготовить документ</a></li>';
 echo ' <li>               <a href="#thumbnail-tab" data-toggle="tab">База адресов</a></li>';             

}
?>                        
                            
                            <li><a href="#label-badge-tab" data-toggle="tab">Список загруженных документов</a></li>
                            <li><a href="#input-group-tab" data-toggle="tab">Шаблоны документов</a></li>
                            <li><a href="#list-group-tab" data-toggle="tab">Задать вопрос</a></li>
                           
                            
                            
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            

<?php                            
if ($comand == 'adres')
{
 echo '<div id="alert-tab" class="tab-pane fade">';                                    
}    
else
{
 echo '<div id="alert-tab" class="tab-pane fade in active">';
}
?>                        
                            
                           
                            
                            
                            
                                <div class="row">
                                
                                
<div class="panel panel-green">
                                            <div class="panel-heading">
                                                Сервис отправки документов</div>
                                                                                                                                    

<form action="later.php" class="form-horizontal" method=post enctype=multipart/form-data>


<?php  
if ($metkahorvop == "yes")
{
?>
<div class="note note-success"><h4 class="box-heading">Вопрос успешно отправлен.</h4>

 <p>Ваш запрос всем юристам на сайте. Через некоторое время вы сможете оценить полученные ответы присланные Вам по почте и на нашес сайте выбрав наилутшего.</p></div>

<?php
}
//$adrotpr = '23123123123';
?>

                                          <h3>Адрес получателя</h3>
                                                                                 

                                                <div class="form-group"><label class="col-sm-3 control-label">Адрес получателя</label>
                                                <div class="col-sm-9 controls">
                                                    <div class="row">  
                                  <div class="col-xs-9"><input value = " <?php echo ($adrespoluch); ?>" name = "adrespoluch" type="text" placeholder="г. Оренбург ул. Восточная 27 кв 9" class="form-control"/></div>
                                  
                                  
                                  
                                  
                                                    <div class="input-group-btn">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Адрес
                                                            &nbsp;<span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="later.php?com=adres">Адреса</a></li>
                                                            <li><a href="later.php">Последний</a></li>
                                                            <li><a href="later.php">Новый</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="later.php">Избранный</a></li>
                                                        </ul>
                                                    </div>
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                                    </div>
                                                </div>
                                            </div>
  
                                                 

                                   <div class="form-group"><label class="col-sm-3 control-label">ФИО получателя</label>
                                             <div class="col-sm-9 controls">
                                                    <div class="row">
                                  <div class="col-xs-9"><input value = " <?php echo ($fiopoluch); ?>" name = "fiopoluch"   type="text" placeholder="Купинов Вадим Ильич" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
              
            
         
              
           


                                          <h3>Адрес отправителя</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Адрес отправителя</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                  <div class="col-xs-9"><input  value = " <?php echo ($adrotpr); ?>"  name = "adresotp" type="text" placeholder="г. Москва ул Академиков 12" class="form-control"/></div>
                                  
                                                    <div class="input-group-btn">
                                                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Адрес
                                                            &nbsp;<span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Адреса</a></li>
                                                            <li><a href="#">Последний</a></li>
                                                            <li><a href="#">Новый</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Избранный</a></li>
                                                        </ul>
                                                    </div>
                                  
                                  
                                  
                                                    </div>
                                                </div>
                                            </div>
  


                                   <div class="form-group"><label class="col-sm-3 control-label">ФИО отправителя</label>
                                             <div class="col-sm-9 controls">
                                                    <div class="row">
                                  <div class="col-xs-9"><input  value = " <?php echo ($Obrashen); ?>"  name = "fiootprav"   type="text" placeholder="Рыбинович Аки Заде" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
              
                                               

                                       <h3>Прикрепить файл отправки</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">первый файл</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                  <div class="col-xs-9"><input name = "file01"  type="file" placeholder="первый файл" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>

					<?php echo '<p><a href="klient/'.$file01.'" download>Скачать файл ('.$file01.')</a>';?> 
  


                                   <div class="form-group"><label class="col-sm-3 control-label">второй файл</label>
                                             <div class="col-sm-9 controls">
                                                    <div class="row">
                                  <div class="col-xs-9"><input name = "file02"  type="file" placeholder="второй файл" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php echo '<p><a href="klient/'.$file02.'" download>Скачать файл ('.$file02.')</a>';?> 


                                  <div class="form-group"><label class="col-sm-3 control-label">третий файл</label>
                                             <div class="col-sm-9 controls">
                                                    <div class="row">
                                  <div class="col-xs-9"><input name = "file03" type="file" placeholder="третий файл" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>
              
                                 	<?php echo '<p><a href="klient/'.$file03.'" download>Скачать файл ('.$file03.')</a>';?> 


                                 <h3>Текст письма</h3>

                                            
                                
        	 <textarea id="editor1" name="pismo" cols="50" rows="90"><?php echo $txt[0]['text'] ?>  <?php echo ($pismo); ?>  </textarea>
                 		


		<script type="text/javascript">
		var ckeditor1 = CKEDITOR.replace( 'editor1' );
		AjexFileManager.init({
		returnTo: 'ckeditor',
		editor: ckeditor1
		});
		</script>








                                     <h3>Дополнения</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Коментарий</label>
                                             <div class="col-sm-9 controls">
                                                    <div class="row">
                                  <div class="col-xs-9"><input  name = "koment"  type="text" placeholder="Коментарий" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            </div>


                                       
                                 <button type="submit" class="btn btn-green btn-block">Отправить на распечатку</button>
                                        </form>

                                    
                                </div>
                            </div>

</div>


                            <div id="note-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="note note-success"><h4 class="box-heading">Success! Duis mollis, est non commodo luctus</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div>
                                        <div class="note note-info"><h4 class="box-heading">Info! Duis mollis, est non commodo luctus</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="note note-warning"><h4 class="box-heading">Warning! Duis mollis, est non commodo luctus</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div>
                                        <div class="note note-danger"><h4 class="box-heading">Dangerous! Duis mollis, est non commodo luctus</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div id="label-badge-tab" class="tab-pane fade">
                                <div class="row">

<div class="panel panel-green">
                                            <div class="panel-heading">
                                                Список подготовленных писем</div>

                                   


<div class="list-group"><a href="#" class="list-group-item "><h4 class="list-group-item-heading">КРАТКОЕ СОДЕРЖАНИЕ ПИСЬМА</h4>
     <p class="list-group-item-text">текст письма.</p></a><a href="#" class="list-group-item"></a>
     
     
     
<?php 
	include_once("connect.php");
        $userstable = "	latermail";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE idklienta = '".$idklienta."'";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
              
echo '<a href=later.php?edit='.$row[id].' class="list-group-item"><h4 class="list-group-item-heading">'.$row[adrespoluch].'  '.$row[fiopoluch].'</h4><p class="list-group-item-text">'.$row[koment].'</p></a>  <span class="label label-danger">Удалить</span><span class="label label-info">Редактировать</span><span class="label label-success">Копировать</span>';        
            //echo '<div class="list-group"><a href="123123123" class="list-group-item"><h4 class="list-group-item-heading">'.$row[opis].'</h4>';
            //echo '<p class="list-group-item-text">'.$row[title].'</p></a><a href="'.$row[href].''.$row[id].'" class="list-group-item"> </a></div>';
          //echo '<p class="list-group-item-text"><a href="later.php?edit=">удалить</a></p>';
                      
          //echo '<a href="later.php?edit=">редактировать</a>';
        }
?>   
     
     
     
     
     
     
     
     

<?php 
	//include_once("connect.php");
    //    $userstable = "	latermail";
     //   mysql_select_db($dbName); 
      //  $query = "SELECT * FROM $userstable WHERE idklienta = '".$idklienta."'";
      //  $res = mysql_query($query) ;  
      //  while ($row=mysql_fetch_array($res) ) 
      //  {
      //      //echo '<h4 class="list-group-item-heading">'.$row[adrespoluch].'</h4>';
       //     $koment      =  $row[koment];
       //     $adrespoluch =  $row[adrespoluch];
       //     $idlater     =  $row[id];  
       //     //$idlater     =  '12';  
       //     //echo ($idlater);
       //     //$summ =  $adrespoluch + $fiopoluch + $adresotp +$fiootprav + $pismo + $koment; 
       //     //echo '<p class="list-group-item-text">'.$koment.'<BR> <BR>  '.$adrespoluch.'<BR>  <BR>  <p align="right"> <a href="URL">(ОТПРАВИТЬ БУМАЖНОЙ ПОЧТОЙ) </a>  <a href="URL">(УДАЛИТЬ) </a>  <a href="later.php?edit='.$idlater.'"> (РЕДАКТИРОВАТЬ)</a>  </p> </p><a href="#" class="list-group-item">';
            
        //}

      //$adrespoluch = $_GET['adrespoluch'];
      //$fiopoluch   = $_GET['fiopoluch'];
      //$adresotp    = $_GET['adresotp'];
      //$fiootprav   = $_GET['fiootprav'];
      //$pismo       = $_GET['pismo'];
      //$koment      = $_GET['koment'];

?> 



                 

     </a></div>


  
                                </div>
                            </div>
</div>

                            
                            
                               


                            <div id="pagination-tab" class="tab-pane fade">
                                <div class="row">
                                    
                                 <h4 class="box-heading">Кодексы и наиболее востребованные законы</h4>

                                        <div class="list-group"><a href="#" class="list-group-item active"><h4 class="list-group-item-heading">Конституция</h4>

                                            <p class="list-group-item-text">В разделе представлены Конституция РФ.,по статистике наиболее актуальные для посетителей сайта.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Кодексы,по статистике наиболее актуальные для посетителей сайта.</h4>

                                            <p class="list-group-item-text">кодексы РФ.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Законы и другие нормативные акты</h4>

                                            <p class="list-group-item-text"> нормативно-правовые документы.По статистике наиболее актуальные для посетителей сайта.</p></a></div>
                                       

                                </div>
                                <hr/>
                                <div class="row">
                                    
                                </div>
                            </div>
                            <div id="input-group-tab" class="tab-pane fade">
                                <div class="row">
<div class="panel panel-green">
                                            <div class="panel-heading">
                                                База данных шаблонов документов</div>
                                                                                                                    

                                        <div class="list-group"><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Жалобы</h4>

                                            <p class="list-group-item-text">Каждый человек наверняка сталкивался с такой проблемой, когда необходимо правильно составить и подать жалобу либо иной документ в органы государственной власти. И зачастую от правильности составления, а не самого смысла жалобы, зависит ответ на них.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Заявления</h4>

                                            <p class="list-group-item-text">Заявление – это документ, который содержит просьбу о зачислении на работу, переводе на другую должность, увольнении, предоставлении отпуска либо отгула.</p></a><a href="#" class="list-group-item"><h4 class="list-group-item-heading">Официальные письмо</h4>

                                            <p class="list-group-item-text">Чтобы составить хорошее, информативное письмо необходимо уделить особое внимание его форме и содержанию.
Для официальных писем используют специальные бланки, которые соответствуют стандарту. Они содержат обязательные реквизиты, расположенные в определенном порядке. </p></a></div>















                                </div>
 </div>
                                <hr/>
                                <div class="row">
                                    

                                    
                                </div>
                            </div>
                            <div id="list-group-tab" class="tab-pane fade">
                                <div class="row">
<div class="panel panel-green">
                                            <div class="panel-heading">
                                                Задать вопрос специалисту.</div>                                    

<form action="#" class="form-horizontal">
<?php  
if ($metkahorvop == "yes")
{
?>
<div class="note note-success"><h4 class="box-heading">Вопрос успешно отправлен.</h4>

 <p>Ваш письмо отправлено в центр обработки. Через некоторое время оно будет распечатано и отправлено адресату.</p></div>

<?php
}
?>

                                   
          <h5>Ваш вопрос будет отправлен всем зарегистрированным пользователям. Которые свяжаться с Вами по электронной почте или указанному телефону  </h5>
                                        



<div class="form-group"><label class="col-sm-3 control-label">Тема вопроса</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><input name = "tema" type="text" placeholder="краткая тема вопроса" class="form-control"/></div>
                                                    </div>
                                                </div>
                                            
                                        


                                        
                                           <div class="form-group">  <label class="col-sm-3 control-label">Вопрос</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-9"><textarea name = "qvest" rows="14" class="form-control"></textarea></div>
                                                    </div>
                                                </div>
                                            </div>

                                        <button type="submit" class="btn btn-green btn-block">Отправить вопрос </button>
                                        </form>













</div> 
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
                            
 <?php                            
if ($comand == 'adres')
{
 echo '<div id="thumbnail-tab" class="tab-pane fade in active">';                                   
}    
else
{
 echo '<div id="thumbnail-tab" class="tab-pane fade">';
}
?>                             
                            
                            
                            
                            

                                <div class="row">


<div class="panel panel-green">
                                            <div class="panel-heading">
                                                База данных адресов</div>
                                                                                                  






<div class="list-group"></div> 

<?php 
	include_once("connect.php");
        $userstable = "	lateradres";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE 1=1 ";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
              
echo '<a href=later.php?idad='.$row[id].' class="list-group-item"><h4 class="list-group-item-heading">'.$row[title].'</h4><p class="list-group-item-text">'.$row[opis].'</p></a>';        
            //echo '<div class="list-group"><a href="123123123" class="list-group-item"><h4 class="list-group-item-heading">'.$row[opis].'</h4>';
            //echo '<p class="list-group-item-text">'.$row[title].'</p></a><a href="'.$row[href].''.$row[id].'" class="list-group-item"> </a></div>';
        }
?> 



                

    

                                
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
