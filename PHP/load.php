<?php
/**
 * Created by PhpStorm.
 * User: Kir
 * Date: 06.10.2014
 * Time: 16:20
 */
echo "<body>";
echo "<br/> История запросов:<br/><pre><code>";
$res = file_get_contents('history.txt');
if ($res == flase)
    echo "Ошибка файл не найден";
else
    echo $res;
echo "</code></pre></body>";
?>