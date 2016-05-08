<?php
$rnc = Utils::getrncByGetId();
$rnc->setStatus(Utils::getUrlParam('status'));
if (array_key_exists('comentario', $_POST)) {
    $rnc->setComentario($_POST['comentario']);
}

$dao = new rncDao();
$dao->save($rnc);
Flash::addFlash('Status alterado com sucesso.');

Utils::redirect('detail', array('id' => $rnc->getId()));
?>