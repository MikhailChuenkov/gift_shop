<?php
/**1
* ������ ������� ��������
* =======================
* $text - �����
*/
?>

<?=nl2br($text)?>
<? if($can_edit): ?>
<hr/>
<a href="page/edit/<?=$id?>">�������������</a>
<a href="page/logout/<?=$id?>">�����</a>
<hr/>
<? endif; ?>