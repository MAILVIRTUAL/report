<?php 
   // Стандартный набор для всех страниц
   include_once("mainstart.php");
   $otvet = "";
   $utoch = "";
?> 

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Дополнительные утилиты</title>
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

<?php $protokol = 'Дополнительные услуги'; include_once("analyticstracking.php") ?>
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
                
                <form id="topbar-search" action="poisk.php" method="POST" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="poisk.php"><i class="fa fa-search"></i></a><input type="text" placeholder="Поиск..." class="form-control text-white"/></div>
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
                            Интернет продвижение</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.php">Главная</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">UI Elements</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Дополнительные услуги</li>
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
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Сайты</a></li>
                            <li><a href="#note-tab" data-toggle="tab">Фильмы</a></li>
                            <li><a href="#label-badge-tab" data-toggle="tab">Изучение английского языка</a></li>
                           
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="alert-tab" class="tab-pane fade in active">
                                <div class="row">






                                        <a href="listprim.php"><div class="note note-warning"><h4 class="box-heading">Список электронныъ приемных</h4>

                                        <p>Список электронныъ приемных</p></div> </a>


				    <a href="listsite.php"> <div class="note note-danger"><h4 class="box-heading">Интересные сайты</h4>

                                            <p>Список сайтов компании</p></div></a>                                    



                                 
                                       <a href="yellopage.php"> <div class="note note-success"><h4 class="box-heading">Желтые страницы интернет</h4>
                                            <p>Сканирование сети Интернет для поиска сайтов.</p></div></a>


                                       <a href="pictlist.php"><div class="note note-info"><h4 class="box-heading">Поиск картинок в интернете</h4>

                                            <p>Скачивание картинок с интернета.Публикация на сайте.</p></div></a>
                                    
                                      

                                        <a href="avtoklik.php"> <div class="note note-danger"><h4 class="box-heading">Автоматическое посещение сайтов</h4>

                                            <p>Автоматическое посещение Ваший сайтов. Увеличение счетчика</p></div></a>                                    


                                </div>
                            </div>
                            <div id="note-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="note note-success"><h4 class="box-heading">Почтальон</h4>

                                            <p>События разворачиваются в 2013 году, спустя несколько десятилетий после ядерной войны и последовавшего за ней распада современной цивилизации. По постапокалиптической пустыне, где когда-то была Юта, путешествует на муле кочевник (Кевин Костнер). Чтобы не умереть от жажды и голода, он разыгрывает перед зрителями спектакли Шекспира на пару со своим мулом. В благодарность за редкое в этом мире развлечение жители поселений предоставляют ему скромную пищу и временное жилье. Тем временем в округе хозяйничает армия гольнистов (последователей Натана Гольна, живущих по его восьми законам и поддерживающих феодальный строй, именно поэтому символ гольнистов - цифра «8» ) под предводительством «генерала» Бетлехема (Уилл Паттон). Гольнисты регулярно собирают дань со всех посёлков в округе: берут провизию, полезные или ценные вещи и рекрутов. Однажды кочевник попадает в руки к гольнистам в качестве рекрута.

Армия большая, каждого новобранца клеймят на правом плече цифрой «8». Все офицеры лично преданы Бетлехему, особенно капитан Айдахо (Джеймс Руссо), который исключительно жесток с новобранцами. Армия держится на дисциплине и страхе, единственное наказание за любой проступок — смерть. В безымянном кочевнике Бетлехем видит угрозу для себя, так как тот умён и независим. Тем не менее Бетлехем обещает сделать из кочевника офицера. Кочевника клеймят и дают ему прозвище «Шекспир» за отличное знание стихов английского поэта. Хотя кочевник и не впечатлён Бетлехемом и не желает сражаться за него, он всё же покоряется судьбе, так как знает, что попытка бегства грозит смертью.

Вызвав «Шекспира» к себе, Бетлехем признаётся, что до войны он был продавцом копировальной техники, хотя всегда знал, что рождён быть лидером. «Шекспира» отправляют на охоту и поручают найти в густых зарослях предположительно мёртвого (а возможно только раненого) льва. В качестве оружия на случай, если зверь жив, «Шекспиру» дают нож. Обыскав заросли, он находит лишь мёртвого охотника. Возвращаясь из зарослей, «Шекспир» проходит мост над горной рекой. Он понимает, что это, возможно, его единственный шанс к освобождению, и в этот момент под ним проламывается доска и он падает с моста в воду.

Уйдя от погони, «Шекспир» бредёт под дождём, не разбирая пути. Он устал и замёрз. Чтобы скрыться от холода и дождя, он забирается в разбитый почтовый фургон. В машине обнаруживается сумка с довоенными письмами. Чтобы согреться, «Шекспир» надевает форму почтальона и разжигает небольшой костёр из писем. От нечего делать он начинает читать письма. В этот момент он задумывает новый спектакль, который наверняка всем понравится, за который сытней накормят и дадут лучший кров.

Прихватив письма, кочевник в форме почтальона отправляется в странствия. Первый посёлок, который ему попадается — Пайнвью (Pineview). Чтобы проникнуть за городские ворота, он притворяется почтальоном и заявляет, что его делегировало восстановленное правительство США, находящееся теперь в Миннеаполисе, и лично президент Ричард Старки. Чтобы окончательно убедить жителей городка, он зачитывает имена адресатов, пока не называет имя одной из горожанок. Это письмо, написанное её сестрой из Денвера пятнадцать лет назад. И хотя некоторые ещё сомневаются (в частности, шериф), большинство с радостью верит в возможность восстановления мира и порядка. Накормив Почтальона, горожане расспрашивают его о новом правительстве и, поверив рассказам, дают ему новые письма для доставки.

Почтальон вдохновляет своим примером юношу по имени Форд Линкольн Меркьюри (Лоренц Тейт), и тот присягает выдуманной почтовой службе. К Почтальону обращается женщина по имени Эбби (Оливия Уильямс) и просит его сделать ей ребёнка, так как её муж не может иметь детей. Почтальон неохотно соглашается и проводит с ней ночь, после чего покидает город. Некоторое время спустя во время обычного рейда по сбору дани в Пайнвью Бетлехем обнаруживает, что в городе работает почтовое отделение, а жители уверены, что правительство США восстановлено. Он считает это предательством и требует сжечь американский флаг и здание почты.

«Восстановив порядок», Бетлехем замечает Эбби, он хочет с ней переспать и просит на это разрешение у её мужа. Получив отказ, Бетлехем убивает его и увозит женщину силой.
Гольнисты штурмуют Беннинг. Кадр из фильма

Спустя время Бетлехем вновь сталкивается с неповиновением, на этот раз в городке Беннинг, штат Орегон. Людей вдохновили на сопротивление рассказы Почтальона, который в это время находится в форте Беннинг. Бетлехем решает взять город штурмом. Во время боя Эбби удаётся освободиться, ей в руки попадает винтовка, и меткими выстрелами она вносит сумятицу в ряды гольнистов. С боем Эбби и Почтальону удаётся вырваться и бежать в горы. При этом Почтальона серьёзно ранят.

Почтальон с Эбби прячутся в охотничьем домике в Голубых горах. Он не желает больше встревать в неприятности, она уговаривает его вернуться. С наступлением весны они спускаются в долину и встречают девочку-подростка, которая развозит почту. Это значит, что Форд Линкольн Меркьюри покинул Пайнвью и организовал почтовую службу, связавшую общины Тихоокеанского Северо-Запада. Кроме доставки писем, почтовая служба распространяет веру в восстановление правительства. Почтальон встречает Меркьюри в одном из городков и обнаруживает хорошо налаженную систему доставки почты. Большинство посыльных — молодёжь и подростки, в лице Почтальона они видят живое воплощение Правительства, а значит мира и порядка, за который стоит бороться.

Тем временем Бетлехем начинает охоту на посыльных, которая постепенно перерастает в небольшую войну. По мере того как гибнет всё больше и больше юношей и девушек, Почтальон решает, что обман зашёл слишком далеко, и распускает почтовую службу. Он пишет письмо Бетлехему, в котором сообщает о роспуске службы и о том, что восстановленного правительства нет. Форд Меркьюри не позволяет Почтальону лично доставить письмо и отправляется сам, зная, что обратно уже не вернётся. Бетлехем получает письмо, но не верит, что всё кончилось. Он решает расстрелять Форда вместе с другим посыльным, пойманным ранее. Под прицелом расстрельной команды двое посыльных знакомятся. Второй посыльный — из Калифорнии, это значит, что процесс самовосстановления государства продолжает набирать обороты. Убив его, Бетлехем решает оставить Форда в качестве приманки для Почтальона.

Почтальон, Эбби и трое посыльных отправляются на запад, подальше от территории гольнистов. Вскоре они приезжают в Бридж-Сити (Bridge City), посёлок, расположенный на дамбе старой гидроэлектростанции. Городом управляет человек, бывший до войны знаменитостью (Том Петти — играет сам себя). Беглецов настигают солдаты Бетлехема, и Том Петти решает помочь знаменитому Почтальону бежать, несмотря на угрозы гольнистов.

Почтальон собирает в окрестных городках людей для финального сражения с гольнистами. Прочитав речь Генриха V перед битвой при Азенкуре, Почтальон сплачивает свои войска перед битвой с Бетлехемом. Однако не желая больше проливать кровь, он вызывает Бетлехема на дуэль, воспользовавшись «правилом номер 7», действовавшим в армии гольнистов. Согласно этому правилу, любой солдат может вызвать лидера на бой и, победив, занять его место. Только сейчас Бетлехему становится понятно, что сбежавший от него «Шекспир» и Почтальон — одно и то же лицо.

Бетлехем принимает вызов, и Почтальон его побеждает. Поверженный тиран не хочет мириться с поражением и пытается убить Почтальона после того, как тот его помиловал. Почтальона спасает полковник Гетти, некогда самый преданный среди офицеров Бетлехема. Бетлехем гибнет.

Финальная сцена переносит зрителя в 2043 год. Дочь Почтальона (Мэри Стюарт Мастерсон) торжественно открывает памятник своему великому отцу. Все присутствующие одеты в новую чистую одежду, у некоторых в руках сложная фототехника. Надпись на постаменте памятника гласит: «Он принёс весть о надежде новому поколению». Почтальону удалось возродить цивилизацию, именно за это ему воздают почести..</p></div>
                                        <div class="note note-info"><h4 class="box-heading">Info! Duis mollis, est non commodo luctus</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="note note-warning"><h4 class="box-heading">Письма к Джульетте</h4>

                                            <p>Журналистка New Yorker, проверяющая факты, Софи Холл (Аманда Сейфрид), мечтает стать писательницей, но её босс не разделяет её желания. Её жених Виктор (Гаэль Гарсиа Берналь) собирается открывать итальянский ресторан в Нью-Йорке. Они едут на «медовый месяц» в Верону, где Виктор заодно встретится с поставщиками. Но он так воодушевился поиском сыров и вина для своего ресторана, что времени на Софи совершенно нет. И ей приходится самой осматривать достопримечательности. Однажды она видит «дом Джульетты», на стену которого прикрепляют письма, в которых влюблённые представительницы прекрасного пола обращаются к Джульетте за советами. В конце дня Софи видит, как итальянка собирает все эти письма в корзинку и уносит. Следуя за ней, Софи узнаёт, что есть группа женщин, называющих себя «секретарями Джульетты», которые отвечают на все эти письма. На следующий день Софи помогает снимать письма со стены и за выпавшим кирпичом находит измятый конверт, написанный в 1957 году молодой англичанкой Клер, которая будучи на учёбе в Италии, влюбилась в Лоренцо Бартолини. Когда он попросил её бежать с ним, она не появляется и пишет к Джульетте об этом. И Софи решает ответить на это письмо.

Через несколько дней Софи встречает молодого англичанина Чарли (Кристофер Игэн), который довольно грубо говорит ей, что она совершила неправильный поступок, написав письмо, так как теперь его бабушка приехала из Англии в поисках любви её молодости. Софи встречается с Клер (Ванесса Редгрейв) и просит взять её с собой в путешествие, чтобы найти всех Лоренцо Бартолини в районе Сиены. И Софи начинает писать эту удивительную историю.</p></div>
                                        <div class="note note-danger"><h4 class="box-heading">Dangerous! Duis mollis, est non commodo luctus</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div>
                                    </div>
                                </div>
                            </div>
                            <div id="label-badge-tab" class="tab-pane fade">
                                <div class="row">
                                 
<div class="col-lg-6">
                                        <a href="eng001.php"> <div class="note note-success"><h4 class="box-heading">Follow me video lessons</h4>
                                        
                                            <p>Уроки English языка представленные преподователем Диной Рудь.</p></div> </a>




                                        <a href="eng002.php"><div class="note note-info"><h4 class="box-heading">How are you?</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div> </a>
                                    </div>
                                    <div class="col-lg-6">



                                        <a href="eng003.php"><div class="note note-warning"><h4 class="box-heading">Can you help me</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div> </a>


                                        <a href="eng004.php"><div class="note note-danger"><h4 class="box-heading">Left, right, straight ahead</h4>

                                            <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p></div> </a>
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
