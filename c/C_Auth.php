<?php
//1
// ����������� �������� ������.
//

class C_Auth extends C_Base
{
//
// �����������.
//
public function __construct(){
parent::__construct();
}

public function before(){
parent::before();
}

public function action_login(){
$this->title .= '::�����������';
$mUsers = M_Users::Instance();
$mUsers->Logout();

if($this->isPost())
{
if($mUsers->Login($_POST['login'], $_POST['password'], isset($_POST['remember'])))
$this->redirect('/');
else{
echo "BAD";
}
//$this->redirect('/');
}
$this->content = $this->Template('v/v_login.php');	
}
}