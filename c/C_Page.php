<?php
//1
// ����������� �������.
//

//index.php?q=page/edit

class C_Page extends C_Base
{
//
// �����������.
//
public function __construct(){
parent::__construct();
}

public function before(){
//$this->needLogin = true; // ���������������, ����� ������� ������ �� ���� ��������� ������� �����������
parent::before();
}

public function action_index(){
$this->title .= '::������';
$id = isset($this->params[2]) ? (int)$this->params[2] : 1;
$mPages = M_Pages::Instance();
$text = $mPages->text_get($id);
$this->content = $this->Template('v/v_index.php', array('text' => $text, 
'id' => $id,
'can_edit' => M_Users::Instance()->Can('EDIT_PAGES')));	
}

public function action_edit(){
if(!M_Users::Instance()->Can('EDIT_PAGES'))
$this->redirect('../auth/login');

$this->title .= '::��������������';
$id = isset($this->params[2]) ? (int)$this->params[2] : 1;
$mPages = M_Pages::Instance();

if($this->isPost())
{
$mPages->text_set($_POST['text'], $id);
$this->redirect("../../page/index/$id");
}

$text = $mPages->text_get($id);
$this->content = $this->Template('v/v_edit.php', array('text' => $text));	
}


}