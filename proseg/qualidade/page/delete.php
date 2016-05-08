<?php
$rnc = Utils::getrncByGetId();

$dao = new rncDao();
$dao->delete($rnc->getId());
Flash::addFlash('RNC excluído com sucesso.');

Utils::redirect('list', array('status' => $rnc->getStatus()));

?>
