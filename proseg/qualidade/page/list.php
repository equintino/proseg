<?php
$status = Utils::getUrlParam('status');
//TodoValidator::validateStatus($status);
rncValidador::validarStatus($status);

$dao = new rncDao();
$search = new rncSearchCriteria();
$search->setStatus($status);

// data for template
if($status=='VENCIDO'){
	$title = ' Prazo(s) '.Utils::capitalize($status).'(s)';
}else{
	$title = ' NC(s) '.Utils::capitalize($status).'(s)';
}
$todos = $dao->find($search);
?>