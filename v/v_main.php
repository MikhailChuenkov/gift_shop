<?php
/**
* �������� ������
* ===============
* $title - ���������
* $content - HTML ��������
*/
?>

<!DOCTYPE html>
<html>
<head>
<base href="<?=BASE_URL?>" />
<title>������� ��������</title>
<meta content="text/html; charset=Windows-1251" http-equiv="content-type">	
<link rel="stylesheet" type="text/css" media="screen" href="/v/style.css" /> 
</head>
<body>
<div id="header">
<h1><?=$title?></h1>
</div>

<div id="menu">
<a href="/page/index/1">������� ��������</a> | 
<a href="/page/index/2">������� �������</a> | 
<a href="/page/index/3">������ � ��������</a> 
</div>

<div id="content">
<?=$content?>
</div>

<div id="footer">
��� ����� ��������. ������. 8-495-123-6549.
</div>
</body>
</html>