<?php
//1
// Конструктор выхода
//

class C_Logout extends C_Base
{
//
// Конструктор.
//
public function __construct(){
parent::__construct();
}

public function before(){
parent::before();
}

public function action_logout(){
$this->title .= ':: Выход';
$mUsers = M_Users::Instance();
$mUsers->Logout();

/*if($this->isPost())
{
if($mUsers->Login($_POST['login'], $_POST['password'], isset($_POST['remember'])))
$this->redirect('/');
else{
echo "BAD";
}
//$this->redirect('/');
}*/
$this->content = $this->Template('v/v_logout.php');	
}
}