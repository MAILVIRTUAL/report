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
  
?> 
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>О фирме, достижения</title>
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
                    <?php include_once("sitebar2.php") ?>
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Статья в газете</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Pages</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Pages</li>
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
                                        
                                    </div>
                                    <p>

Долевое участие в строительстве. Что можно потребовать от застройщика, в случае неисполнения им обязательств.

В связи с принятием в 1998 году Федерального закона «Об ипотеке», а в конце 2004 года Федерального закона № 214-ФЗ «Об участии в долевом строительстве…» большое количество граждан нашей страны, в том числе и работники ООО «Газпромтранс», получили возможность обрести свои «родные стены». Однако помимо положительных моментов и возможностей появился ряд проблем, связанных с ненадлежащим исполнением обязательств недобросовестными застройщиками.

Можно выделить некоторые из них:

1. Просрочка сдачи дома в эксплуатацию, а договор не предусматривает неустойку за просрочку.

Даже если договор долевого участия в строительстве не предусматривает неустойку вы вправе требовать неустойку в размере 1/300 ставки рефинансирования ЦБ за каждый день просрочки (ч.2 ст. 6 закона № 214 – ФЗ). Если вы приобретаете квартиру для личных нужд не связанных с осуществлением предпринимательской деятельности, то на Вас в данном случае также распространяется Закон РФ от 07.02.1992 № 2300-1 «О защите прав потребителей» (ч.9 ст.4 закона № 214-ФЗ). А это говорит о том, что помимо неустойки вы можете требовать компенсации морального вреда и штраф в размере 50% от суммы, присужденной судом в вашу пользу (п.6 ст.13, ст.15 закона № 2300-1). Следует отметить, что возможные ссылки застройщика на срыв сроков из-за субподрядчика также не освобождает его от ответственности (п.3 ст. 401 ГК РФ, п. 6 Обзора ВС РФ по отдельным вопросам судебной практики о применении законодательства о защите прав потребителей при рассмотрении гражданских дел, утв. Президиумом ВС РФ 01.02.2012).

2. Застройщик предлагает подписать дополнительное соглашение с новыми сроками передачи квартиры.

Прежде всего следует отметить, что подписание дополнительного соглашения является правом, а не обязанностью дольщика. Если вы отказываетесь от подписания доп. соглашения, то срок исполнения обязательства застройщика по передаче квартиры остается прежним. Таким образом, при нарушении срока передачи квартиры у Вас будет право взыскать неустойку (ч.2 ст. 6 закона № 214 – ФЗ). Если же вы подписали дополнительное соглашение, то договор будет действовать на условиях нового срока (ч.1 ст. 453 ГК РФ) и как следствие, пропуск застройщиком прежнего срока уже не будет основанием для начисления неустойки.

Также вы можете без штрафных санкций во внесудебном порядке отказаться от договора, когда просрочка застройщика по передаче квартиры составит два месяца и более. (п.2 ч.1 ст.9 закона № 214 – ФЗ). Для чего нужно уведомить застройщика

способом, подтверждающим факт получения одностороннего отказа от договора (например, заказное письмо с описью вложения и уведомление о вручении).

Если же установленный договором срок передачи квартиры ещё не наступил, но строительство приостановлено и есть вероятность, что застройщик не сможет предать квартиру в срок, то расторжение договора возможно требовать только в судебном порядке (п.1 ч.1.1 ст.9 закона № 214 – ФЗ).

3. Фактическая площадь передаваемой по акту приема-передачи квартиры менее, установленной договором долевого участия.

К сожалению подобная ситуация не редкость, когда покупаем одни квадратные метры, а по факту получаем в среднем на 1-3 квадратных метра меньше. Итак, в случаях, когда цена недвижимости в договоре продажи недвижимости установлена за единицу её площади или иного показателя её размера, общая цена такого недвижимого имущества, подлежащая уплате, определяется исходя из фактического размера переданного покупателю недвижимого имущества (ч. 3 ст. 555 ГК РФ), а также в случае, если объект долевого строительства построен (создан) застройщиком с отступлениями от условий договора и (или) указанных в части 1 настоящей статьи обязательных требований, приведшими к ухудшению качества такого объекта, или с иными недостатками, которые делают его непригодным для предусмотренного договором использования, вы, если иное не установлено договором, вправе потребовать от застройщика соразмерного уменьшения цены договора (п. 2 ч. 2 ст. 7 закона N 214-ФЗ). Решается данный вопрос во внесудебном порядке, путем передачи застройщику заявления «О соразмерном уменьшении цены договора долевого участия в строительстве в связи с изменение площади объекта строительства», с подтверждением его получения (например, отметка о получении с датой на вашем экземпляре заявления) желательно одновременно с подписанием акта приёма – передачи квартиры.

Евгения ГОНЧАРОВА,

юрисконсульт 1 категории

Оренбургского филиала 

<a href="download/gazeta.pdf">Скачать pdf копию газеты</a>



</p>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12"><h2 class="mbxl">Наши достижения</h2>

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="member-team"><img src="images/yevgen.jpg" class="img-responsive"/>

                                                    <h3>Евгения Гончаров
                                                        <small>>Юрист</small>
                                                    </h3>
                                                    <p>Долевое участие в строительстве. Что можно потребовать от застройщика, в случае неисполнения им обязательств. <a href="yevgeniyanews.php">Подробнее...</a>
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
