<?php
/**
* Основной шаблон
* ===============
* $title - заголовок
* $content - HTML страницы
*/
?>

<!DOCTYPE html>
<html>
<head>
<base href="<?=BASE_URL?>" />
<title>Магазин подарков</title>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
<link rel="stylesheet" type="text/css" media="screen" href="/v/style.css" /> 
</head>
<body>
<div id="header">
<h1><?=$title?></h1>
</div>

<div id="menu">
<a href="/page/index/1">Главная страница</a> | 
<a href="/page/index/2">Каталог товаров</a> | 
<a href="/page/index/3">Оплата и доставка</a> 
</div>

<div id="content">
<?=$content?>
</div>

<div id="footer">
Все права защищены. Москва. 8-495-123-6549.
</div>
</body>
</html>