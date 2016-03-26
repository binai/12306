<?php 

require_once('12306.php');

echo train::getInstance()->run('广州 上海');

#echo date('Y-m-d');