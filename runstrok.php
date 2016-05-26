		<div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                    <li>Добро пожаловать на сайт автоматизации документооборота</li>
<?php                
        $userstable = "runstrik";      
        $query = "SELECT * FROM $userstable WHERE 1=1 ";
        $res = mysql_query($query) ;
        if ($res == 'true')
        {
         echo "Данные успешно обновлены.";
        $metkahorvop = "yes";
        }
        else
        {
        echo "Данные не обновлены!";
        }       
        while ($row=mysql_fetch_array($res)) 
        {
            echo '<li>'.$row[namestrok].'</li>';
        }                               
?>                     
                    </ul>
                </div>
