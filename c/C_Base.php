<?php
//1
// Ѕазовый контроллер сайта.
//
abstract class C_Base extends C_Controller
{
protected $title;	// заголовок страницы
protected $content;	// содержание страницы
protected $needLogin;	// необходима ли авторизаци€
protected $user;	// авторизованный пользователь || null

//
//  онструктор.
//
function __construct()
{	
$this->needLogin = false;
$this->user = M_Users::Instance()->Get();
}

protected function before()
{
if($this->needLogin && $this->user === null)
$this->redirect('/auth/login');

$this->title = 'ћагазин подарков ';
$this->content = '';
}

//
// √енераци€ базового шаблона
//	
public function render()
{
$vars = array('title' => $this->title, 'content' => $this->content);	
$page = $this->Template('v/v_main.php', $vars);	
echo $page;
}	
}