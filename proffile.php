<?php 
session_start();
include_once("connect.php");


if (isset($_GET[sisadmin]))
{
	$userstable = "user";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE id = '".$_GET[sisadmin]."'";
        $res = mysql_query($query);  
        while ($row=mysql_fetch_array($res)) 
        {
	$_SESSION['Login']      = $row [login];
	$_SESSION['Password']   = $row [pass];
              
	}


}


       
if (isset($_GET['Pflogin']) and isset($_GET['Pfpass']))
  {
        $Pfmail    = $_GET['Pfmail']; 
        $FirstName = $_GET['PfFirstName'];
        $LastName  = $_GET['PfLastName'];
        $selfy     = $_GET['selfy'];
        $sex       = $_GET['sex'];

        //Pfmobtel  Pfwebsite  Pfvkontakte  Pftwiter

        $Pfmobtel    = $_GET['Pfmobtel'];
        $Pfwebsite   = $_GET['Pfwebsite'];
        $Pfvkontakte = $_GET['Pfvkontakte']; 
        $Pftwiter    = $_GET['Pftwiter'];
        $merad       = $_GET['merad'];
	$prof        = $_GET['prof'];
        


        if ($Pfmobtel <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET mobtel = '".$Pfmobtel."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query); 
            //echo $query;  
	    if ($res == 'true')
	    {
	       // echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }



        if ($Pfwebsite <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET website = '".$Pfwebsite."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }




        if ($Pfvkontakte <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET vkontakte = '".$Pfvkontakte."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }



        if ($Pftwiter <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET twiter = '".$Pftwiter."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }

  

        if ($selfy <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET selfy = '".$selfy."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }


        if ($Pfmail <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET mail = '".$Pfmail."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }



        if ($FirstName <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET FirstName = '".$FirstName."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }

      if ($LastName <> '')
        {
            $userstable = "user";
            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET LastName = '".$LastName."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }
       if ($sex <> '')
        {
	    //echo $sex;
            $userstable = "user";

	    if ($sex == 'Мужской')
            {
            $sex2 = 1;
            }
	    if ($sex == 'Женский')
            {
            $sex2 = 2;
            }

	    if ($sex == 'Неизвестно')
            {
            $sex2 = 0;
            }
	    	

            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET sex = '".$sex2."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
                //echo $sex;
		//echo $query;
	    }
	    else
	   {
	       //echo "Данные не обновлены!";
	   }        
        }

       if ($merad <> '')
        {
          $userstable = "user";
	    if ($merad == 'Холост')
            {
            $merad2 = 1;
            }
	    if ($merad == 'В браке')
            {
            $merad2 = 2;
            }

	    if ($merad == 'Неважно')
            {
            $merad2 = 0;
            }
	    	

            mysql_select_db($dbName) or die(mysql_error()); 
            $query = "UPDATE user SET merad = '".$merad2."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
            $res = mysql_query($query);  
	    if ($res == 'true')
	    {
	        //echo "Данные успешно обновлены.";
                //echo $sex;
		//echo $query;
	    }
	    else
	   {
	      // echo "Данные не обновлены!";
	   }        
        }




       if ($prof <> '')
        {
          $userstable = "user";
	  mysql_select_db($dbName) or die(mysql_error()); 
          $query = "UPDATE user SET prof = '".$prof."' WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
          $res = mysql_query($query);  
	  if ($res == 'true')
	   {
	        //echo "Данные успешно обновлены.";
                //echo $sex;
		//echo $query;
	   }
	   else
	   {
	      // echo "Данные не обновлены!";
	   }        
        }





  }



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
   // Вход с предудущий сесии Поиск данныю юзера
   if ($_SESSION['Login'] <> '' and $_SESSION['Password'] <> '')
   {  
        $userstable = "user";
        mysql_select_db($dbName); 
        $query = "SELECT * FROM $userstable WHERE login = '".$_SESSION['Login']."' and pass = '".$_SESSION['Password']."'";
        $res = mysql_query($query) ;  
        while ($row=mysql_fetch_array($res)) 
        {
            $Obrashen = $row[FirstName]." ".$row[LastName];
            $Mail     = $row[mail]; 
            $_key     = '';
            $FirstName= $row[FirstName];
            $LastName = $row[LastName];
            $selfy    = $row[selfy];
            $Pfmobtel     = $row[mobtel];
            $Pfwebsite    = $row[website];
            $Pfvkontakte  = $row[vkontakte]; 
            $Pftwiter     = $row[twiter];
            $Pffotoklienta     = $row[fotoklienta];
            $datareg      =  $row[datareg];
            $iduser       = $row [id];
            // Адрес отправителя  
            $adrotpr   = $row[adrotpr];
	          $sex   = $row[sex];	
	          $merad = $row[merad];

        }
        //echo $Obrashen;
    }


//<!-- MailVirtual Analytics -->
    
    $protokol = 'Профиль клиента';


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
      		//echo "Данные не обновлены!";
    	}
    }     

        

    //<!-- MailVirtual Analytics -->

?> 







<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Профиль клиента</title>
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
                    <?php include_once("sitebar.php") ?>
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Profile Клиента</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Extras</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Провиль клиента</li>
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

 <?php 
                    echo '<div class="col-md-12"><h2>'.$Obrashen.'</h2>';
 ?>




                        <div class="row mtl">
                            <div class="col-md-3">
                                <div class="form-group">
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                    
                                
                  <?php 
                          echo '<div class="text-center mbl"><img src="/upload/'.$Pffotoklienta.'" alt="" class="img-responsive"/></div>';
                  ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="text-center mbl"><a href="zagruzfoto.php" class="btn btn-green"><i class="fa fa-upload"></i>&nbsp;
                                        Загрузить</a></div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <td>Имя пользователя</td>
                                        <?php 
                                          echo '<td>'.$Obrashen.'</td>';
                                        ?>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <?php     
                                        echo '<td>'.$Mail.'</td>';
                                        ?>

                                    </tr>
                                    <tr>
                                        <td>Адрес</td>



                                        <td><?php echo ($adrotpr) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Статус</td>
                                        <td><span class="label label-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <td>Рейтинг</td>
                                        <td><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i><i class="fa fa-star text-yellow fa-fw"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Дата регистрации</td>
                                        <td> <?php echo ($datareg); ?> </td>
                                    </tr>
                                    </tbody>
                                </table>
								<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-content">
										<ul class="list-inline item-details">
											<li><a href="http://themifycloud.com">Admin templates</a></li>
											<li><a href="http://themescloud.org">Bootstrap themes</a></li>
										</ul>
									</div>
								</div>
                            </div>
                            <div class="col-md-9">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-edit" data-toggle="tab">Редактировать</a></li>
                                    <li><a href="#tab-messages" data-toggle="tab">Сообщения</a></li>
                                </ul>
                                <div id="generalTabContent" class="tab-content">
                                    <div id="tab-edit" class="tab-pane fade in active">



<i class="fa fa-briefcase"></i>
                                        <form action="proffile.php" class="form-horizontal"><h3>Настройки аккаунда</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Email</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php 
                                echo '<div class="col-xs-9"><input name = "Pfmail" type="email" value = '.$Mail.' placeholder="'.$Mail.'" class="form-control"/></div>';
 ?>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-group"><label class="col-sm-3 control-label">Логин</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php 
  echo' <div class="col-xs-9"><input value = '.$_SESSION['Login'].' name = "Pflogin" type="text" placeholder="'.$_SESSION['Login'].'" class="form-control"/></div>';
?>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group"><label class="col-sm-3 control-label">Пароль</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php 
                  echo '<div class="col-xs-4"><input name ="Pfpass" type="password" value = '.$_SESSION['Password'].' placeholder="'.$_SESSION['Password'].'" class="form-control"/></div>';
?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Повторный пароль</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
             echo'<div class="col-xs-4"><input type="password" value = '.$_SESSION['Password'].' placeholder="'.$_SESSION['Password'].'" class="form-control"/></div>';
?>


                                                    </div>
                                                </div>
                                            </div>
                                            <hr/><i class="fa fa-user"></i>
                                            <h3>Настройка профиля</h3>
                                          

                                            <div class="form-group"><label class="col-sm-3 control-label">Имя</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">

           
            
<?php
     echo '<div class="col-xs-9"><input name = "PfFirstName" type="text" value = '.$FirstName.' placeholder="'.$FirstName.'" class="form-control"/></div>';
?>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="col-sm-3 control-label">Фамилия</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
        echo '<div class="col-xs-9"><input name = "PfLastName" type="text" value = '.$LastName.' placeholder="'.$LastName.'" class="form-control"/></div>';
?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Род</label>

                                                <div class="col-sm-9 controls">


                                                    <div class="row">
                                                       <div class="col-sm-9 controls">
                                                        <div class="row">
                                                          <div class="col-xs-4"><select name = "sex" class="form-control">

<?php
						            if ($sex == 0)
							    {	
                         				     echo ("<option >Женский</option>");	
                                                             echo ("<option >Мужской</option>");
							     echo ("<option  selected >Неизвестно</option>");
                                                             }
						            if ($sex == 1)
							    {	
                         				     echo ("<option >Женский</option>");	
                                                             echo ("<option  selected >Мужской</option>");
							     echo ("<option >Неизвестно</option>");
                                                             }
						            if ($sex == 2)
							    {	
                         				     echo ("<option  selected >Женский</option>");	
                                                             echo ("<option >Мужской</option>");
							     echo ("<option >Неизвестно</option>");
                                                             }
						
?>
						



                                                            </select></div>
                                                    	   </div>
                                                	</div>
                                                    </div>

						     






                                                </div>
                                            </div>
                                            
                                            <div class="form-group"><label class="col-sm-3 control-label">Семейное положение</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select name = "merad" class="form-control">

<?php
						if ($merad == 0)
        				        {
                                                 echo ("<option>Холост</option>");
                                                 echo ("<option>В браке</option>");
						 echo ("<option selected>Неважно</option>");
						}
						if ($merad == 1)
        				        {
                                                 echo ("<option selected >Холост</option>");
                                                 echo ("<option >В браке</option>");
						 echo ("<option >Неважно</option>");
						}

						if ($merad == 2)
        				        {
                                                 echo ("<option >Холост</option>");
                                                 echo ("<option selected >В браке</option>");
						 echo ("<option >Неважно</option>");
						}

?>


                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Статус услуг</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
                                                        <div class="col-xs-4"><select name = "prof" class="form-control">




<?php
							if ($prof == "Пользователь")
							{
                                                            echo '<option selected> Пользователь</option>';
                                                            echo '<option>Юрист</option>';
                                                            echo '<option>Бухгалтер</option>';
                                                            echo '<option>Литератор</option>';
                                                            echo '<option>Почтальон</option>';
							}

							if ($prof == "Юрист")
							{
                                                            echo '<option> Пользователь</option>';
                                                            echo '<option selected >Юрист</option>';
                                                            echo '<option>Бухгалтер</option>';
                                                            echo '<option>Литератор</option>';
                                                            echo '<option>Почтальон</option>';
							}	

							if ($prof == "Бухгалтер")
							{
                                                            echo '<option> Пользователь</option>';
                                                            echo '<option>Юрист</option>';
                                                            echo '<option selected >Бухгалтер</option>';
                                                            echo '<option>Литератор</option>';
                                                            echo '<option>Почтальон</option>';
							}	
							if ($prof == "Литератор")
							{
                                                            echo '<option> Пользователь</option>';
                                                            echo '<option>Юрист</option>';
                                                            echo '<option>Бухгалтер</option>';
                                                            echo '<option selected >Литератор</option>';
                                                            echo '<option>Почтальон</option>';
							}	
							if ($prof == "Почтальон")
							{
                                                            echo '<option> Пользователь</option>';
                                                            echo '<option>Юрист</option>';
                                                            echo '<option>Бухгалтер</option>';
                                                            echo '<option>Литератор</option>';
                                                            echo '<option selected >Почтальон</option> ';
							}


if (($prof <> "Пользователь") and ($prof <> "Юрист") and ($prof <> "Бухгалтер") and ($prof <> "Литератор") and ($prof <> "Почтальон"))
							{
                                                            echo '<option selected> Пользователь</option>';
                                                            echo '<option>Юрист</option>';

                                                            echo '<option>Бухгалтер</option>';
                                                            echo '<option>Литератор</option>';

                                                            echo '<option>Почтальон</option>';
							}	

	
?>



                                                        </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">О мне</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
                  echo '<div class="col-xs-9"><textarea name = "selfy" rows="3"  class="form-control">'.$selfy.'</textarea></div>';
?>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <i class="fa fa-envelope"></i>
                                            <h3>Контактные данные</h3>

                                            <div class="form-group"><label class="col-sm-3 control-label">Мобильный телефон</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
    echo '<div class="col-xs-9"><input name = "Pfmobtel" value = "'.$Pfmobtel.'" type="text" placeholder="мобильный телефон" class="form-control"/></div>';
?>
<i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                            </div>






					 <div class="form-group"><label class="col-sm-3 control-label">Адрес отправки почты</label>
			
                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
    echo '<div class="col-xs-9"><input name = "Pfadrotpr" value = "'.$adrotpr.'" type="text" placeholder="Адрес" class="form-control"/></div>';
?>
                                                    </div>
                                                </div>
                                            </div>









                                            <div class="form-group"><label class="col-sm-3 control-label">web сайт</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
    echo '<div class="col-xs-9"><input name = "Pfwebsite" value = "'.$Pfwebsite.'" type="text" placeholder="web сайт" class="form-control"/></div>';
?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">В Контакте</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
    echo '<div class="col-xs-9"><input name = "Pfvkontakte" value = "'.$Pfvkontakte.'" type="text" placeholder="в контакте" class="form-control"/></div>';
?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="col-sm-3 control-label">Twitter</label>

                                                <div class="col-sm-9 controls">
                                                    <div class="row">
<?php
    echo '<div class="col-xs-9"><input name = "Pftwiter" value = "'.$Pftwiter.'" type="text" placeholder="twitter" class="form-control"/></div>';
?>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <button type="submit" class="btn btn-green btn-block">Завершить</button>
                                        </form>
                                    </div>
                                    <div id="tab-messages" class="tab-pane fade in">
                                        <div class="row mbl">
                                      <div class="col-lg-6"><span style="margin-left: 15px"></span><input type="checkbox"/><a href="#" class="btn btn-success btn-sm mlm mrm"><i class="fa fa-send-o"></i>&nbsp;
                                                Список</a><a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i>&nbsp;
                                                Удалить</a></div>
                                            <div class="col-lg-6">
                                                <div class="input-group"><input type="text" class="form-control"/><span class="input-group-btn"><button type="button" class="btn btn-white">Search</button></span></div>
                                            </div>
                                        </div>
                                        <div class="list-group">
                                        
                                        
                                        <?php
                                        $userstable = "blogi";
                                        mysql_select_db($dbName); 
                                        $query = "SELECT * FROM $userstable WHERE idavtor = ".$iduser."  ORDER BY id DESC ";
                                        $res = mysql_query($query);
                                        
                                        while ($row=mysql_fetch_array($res))                                         
        	                              {
                                        
                                          
                                          echo '<a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Блог</span><span>'.$row[title].'</span>&nbsp;';
                                          echo '- &nbsp;<span style="font-size: 11px;" class="text-muted">..</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span></a>';
                                         
                                        }        
                                         ?>           
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
