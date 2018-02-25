<?php
/**1
* Шаблон главной страницы
* =======================
* $text - текст
*/
?>

<?=nl2br($text)?>
<? if($can_edit): ?>
<hr/>
<a href="page/edit/<?=$id?>">Редактировать</a>
<a href="page/logout/<?=$id?>">Выйти</a>
<hr/>
<? endif; ?>