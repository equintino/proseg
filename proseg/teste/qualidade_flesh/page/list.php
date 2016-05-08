<?php
$status = Utils::getUrlParam('status');
TodoValidator::validateStatus($status);

$dao = new TodoDao();
$search = new TodoSearchCriteria();
$search->setStatus($status);

// data for template
$title = ' NC(s) '.Utils::capitalize($status).'(s)';
$todos = $dao->find($search);
?>