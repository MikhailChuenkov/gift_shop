<?php
//1
// ������� ����� �����������.
//
abstract class C_Controller
{
// ������ � ����������� - ������ $_GET
protected $params;

// ��������� �������� �������
protected abstract function render();

// ������� �������������� �� ��������� ������
protected abstract function before();

public function Request($action, $params)
{
$this->params = $params;
$this->before();
$this->$action();
$this->render();
}

//
// ������ ���������� ������� GET?
//
protected function IsGet()
{
return $_SERVER['REQUEST_METHOD'] == 'GET';
}

//
// ������ ���������� ������� POST?
//
protected function IsPost()
{
return $_SERVER['REQUEST_METHOD'] == 'POST';
}

//
// ��������� HTML ������� � ������.
//
protected function Template($fileName, $vars = array())
{
// ��������� ���������� ��� �������.
foreach ($vars as $k => $v)
{
$$k = $v;
}

// ��������� HTML � ������.
ob_start();
include "$fileName";
return ob_get_clean();	
}	

// ���� ������� �����, �������� ��� - ��������� ������
public function __call($name, $params){
die('����������� url-�����!!!');
}

// 
protected function redirect($url){

if($url[0] == '/')
$url=BASE_URL."page/index";
//$url = BASE_URL . substr($url, 1);

header("location: /$url");
exit();
}
    
protected function goods($fileName, $vars = array())
{
// ��������� ���������� ��� �������.
foreach ($vars as $k => $v)
{
$$k = $v;
}
}
}