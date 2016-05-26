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
<?php include_once("analyticstracking.php") ?>
    <title>Программы документооборота, 1С Предприятие Документооборот</title>
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
                            Программное обеспечение</div>
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
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Описание</a></li>
                            <li><a href="#note-tab" data-toggle="tab">Скачать программу</a></li>
                            <li><a href="#label-badge-tab" data-toggle="tab">Тех. подержка</a></li>
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
                                    <div class="col-lg-6"><h3>Основные функции программы</h3>
                                      Сегодня повсеместно отделами по борьбе с экономическими преступлениями в муниципальных образованиях РФ проводятся проверки органов местного самоуправления, организаций малого бизнеса, учебных заведений. В большинстве проверок обнаруживаются программы нелицензионнного происхождения. Пока еще не проводятся проверки домашних компьютеров, но то, что многие их владельцы также являются преступниками по факту нарушения статьи 146 УК РФ «Нарушение авторских и смежных прав», не вызывает сомнений.

Истоки нынешней ситуации нужно искать в 70-х годах прошлого века, когда на государственном уровне решалась задача «клонирования» западных компьютеров и программ. Таким образом правовой беспредел в использовании «пиратских» программ в последние пятнадцать лет имеет корни в государственной политике предыдущего периода и государство само несет ответственность за создавшуюся ситуацию. Поэтому решение проблемы лицензионной очистки российских компьютеров только жесткими карательными мерами без предоставления реальных альтернатив и широкого разъяснения существующей ситуации, становится недопустимым и наносит ущерб нашему обществу. Главной проблемой является абсолютная незащищённость органов местного самоуправления, организаций малого бизнеса, учебных заведений, граждан, имеющих компьютеры в личном пользовании, перед правоохранительными органами и корпорациями-производителями программного обеспечения, заинтересованными лишь в продаже своих продуктов любой ценой.

Поэтому создание правозащитного общедоступного интернет-портала, а также правовая помощь онлайнового сообщества и юристов, специализирующихся на решении этих проблем, и подбор, размещение, анализ и комментирование материалов, связанных со 146 статьёй Уголовного кодекса РФ, на их основе является единственным способом решения этой существенной проблемы, когда многие представители органов местного самоуправления, организаций малого бизнеса, учебных заведений, жителей, имеющих домашние компьютеры, оказались абсолютно беззащитными и очень плохо информированными в области новейших информационных технологий, программных продуктов и ответственности за их использование.
  
                                        
                                    </div>
                                    <div class="col-lg-6"><h3>Предоставление услуг Интернета и защита прав пользователей </h3>
 Полный произвол сегодня творится в сфере предоставления различных услуг Интернета. Полностью выпавшие из-под контроля антимонопольных служб, эти услуги в ряде случаев имеют заоблачные экономически необоснованные цены. К тому же каждый пользователь услуг Интернета оплачивая эти услуги, тем самым автоматически принимает регламент оказания этих услуг. А именно здесь и начинается самое интересное.

С уходом компартии авторитарный режим не исчез, он просто изменил свои формы. Бесцеремонность обращения партийного руководства с собственным народом плавно перешла в те же формы работы провайдеров услуг интернета со своими пользователями.
Сегодня оплачивая услуги мы "тем самым принимаем условия договора", спрятанные в недрах сайта провайдера в форме многостраничного документа  - "правил", "технического регламента" и т.п. условий , которые в значительной степени противоречат здравому смыслу, обычаям делового оборота и т.п.
Рассмотрим платные договора, так как можно даже не упоминать бесплатные услуги (по ним пользователь услуг не имеет никаких прав вообще).
Как правило, все платные договора на предоставление услуг Интернета (провайдерские услуги на доступ в сеть Интернет, регистрация доменных имен, услуги хостинга, платная регистрация в каталогах) относятся к договорам присоединения(Статья 428 ГК РФ).
Рассмотрим типичную ситуацию на примере платной регистрации в каталоге Яндекса. Исполнитель (Яндекс) принял заявку, включая текст для публикации в каталоге. Затем после принятия заявки и оплаты заказчиком по своим внутренним правилам исполнитель полностью меняет и в несколько раз сокращает текст.
Здравый смысл и обычаи делового оборота подсказывают, что заказчик должен видеть результат договора - текст публикации до оплаты, но Яндекс со ссылкой на свои "правила" отказывается предоставлять этот текст до оплаты, тем самым принуждая заказчика услуг покупать "кота в мешке"! Вот вам и ненавязчивый сервис в стиле известных времен: "не нравится - не ешь".
Другой пример. Оказывается, если Ваш сайт был «взломан» злоумышленниками, то Вы и виноваты, а Ваш сайт в соответствии с регламентом может быть отключен «навсегда», хотя услуга оплачена на год вперед, при этом поставщик услуг, допустивший этот взлом, полностью устраняется от поиска «вредителя». Это целиком Ваши проблемы.
Третий пример. Сегодня от 80 до 90% объема траффика сети интернет – так называемый «СПАМ», сетевая реклама, заполнившая весь Интернет. Сегодня все поставщики услуг Интернета стали практически участники этого засорения всемирной сети, так как отсутствует политическая воля по его искоренению как на уровне нашего государства, так и на уровне коммерческих фирм, предоставляющих эти услуги.
Даже известные правозащитники в ряде случаев выступают защитниками такой «свободы» и "мальчиков с хакерскими наклонностями". Поэтому назрела необходимость решения проблемы по комплексной защите прав пользователей сети Интернет путем создания новой социальной сети сообщества пользователей программного обеспечения Московской области и России с тем, чтобы каждая жертва смогла озвучить свои проблемы и получить помощь и защиту онлайнового сообщества.
Здесь будет размещаться информация о борьбе со «спамом» и поставщиках услуг Интернета, ставших участники этого засорения всемирной сети. Будет также оказываться давление на государственные органы власти для появления политической воли по искоренению «спама» и «хакерства» как на уровне нашего государства, так и на уровне коммерческих фирм, предоставляющих интернет-услуги.
Два слова о причинах этого явления. Проблема не в конкретных фирмах - поставщиках услуг в сети Интернет. Причина проблемы в культуре современного российского общества, воспитанного на авторитаризме и тоталитаризме.
Хотелось бы верить, что нынешняя безобразная ситуация в сети интернет, характеризуемая словами "авторитаризм" и "тоталитаризм", когда несколько монополистов навязали всему остальному обществу этот самый авторитарный режим, будет иметь логичное завершение. Остается надежда, что цивилизация и реальная демократия в России все-таки пускают свои корни и нынешний произвол, как и КПСС, не будет существовать вечно.
От нас с вами зависит создание рынка услуг, чтобы появились новые поставщики услуг, работающие без жесткого диктата по отношению к клиентам.
Если у читателя этого материала есть мнение, которое он хотел бы довести до сведения посетителей портала 146uk.ru, то просьба направить свой материал по координатам, указанным внизу страницы. 
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="note-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                       

                                            

                                    
                                    </div>
                                </div>
                            </div>


                            <div id="label-badge-tab" class="tab-pane fade">
                                <div class="row">
                                   
                                        

                                        
                                      
                                  
                                </div>
                            </div>
                            <div id="pagination-tab" class="tab-pane fade">
                                <div class="row">
                                    
                                </div>
                                <hr/>
                                <div class="row">
                                    
                                </div>
                            </div>
                            <div id="input-group-tab" class="tab-pane fade">
                                <div class="row">
                                    
                                    
                                    
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-lg-6">

                                        <div class="row">
                                            
                                            
                                        </div>
                                        

                                        <div class="row">
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        
                                        <div class="mbxl"></div>
                                        

                                        <div class="input-group">
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="list-group-tab" class="tab-pane fade">
                                <div class="row">
                                    
                                </div>
                            </div>
                            <div id="navbar-tab" class="tab-pane fade">
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                   
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    
                                </div>
                            </div>
                            
                            <div id="other-tab" class="tab-pane fade">
                                <div class="row">
                                    
                                    
                                </div>
                                <div class="mbxl"></div>
                                <div class="row">
                                    
                                </div>
                                <div class="mbxl"></div>
                                <div class="row">
                                    
                                    
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
