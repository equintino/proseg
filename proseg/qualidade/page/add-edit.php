<?php
$errors = array();
$rnc = null;
$edit = array_key_exists('id', $_GET);
include '../model/rnc.php';
if ($edit) {
    $rnc = Utils::getrncByGetId();
} else {
    // set defaults
    $rnc = new rnc();
    $rnc->setPrioridade(rnc::PRIORIDADE_MEDIA);
    $prazo = new DateTime("+5 day");
    $prazo->setTime(0, 0, 0);
    $rnc->setPrazo($prazo);
}

if (array_key_exists('cancel', $_POST)) {
    // redirect
    Utils::redirect('detail', array('id' => $rnc->getId()));
} elseif (array_key_exists('save', $_POST)) {
    // for security reasons, do not map the whole $_POST['todo']
    @$data = array(
        'numero' => $_POST['rnc']['numero'],
        'abertura' => $_POST['rnc']['prazo_date'] . ' ' . $_POST['rnc']['prazo_hour'] . ':' . $_POST['rnc']['prazo_minute'] . ':00',
        'prioridade' => $_POST['rnc']['prioridade'],
        'retorno' => $_POST['rnc']['retorno'],
        'origem' => $_POST['rnc']['origem'],
        'tipoacao' => $_POST['rnc']['tipoacao'],
        'processo' => $_POST['rnc']['processo'],
        'responsavel' => $_POST['rnc']['responsavel'],
        'detalhamanto' => $_POST['rnc']['detalhamanto'],
        'causas' => $_POST['rnc']['causas'],
        'imediata' => $_POST['rnc']['imediata'],
        'corretiva' => $_POST['rnc']['corretiva'],
        'responsavel_implementacao' => $_POST['rnc']['responsavel_implementacao'],
        'eliminacao' => $_POST['rnc']['eliminacao'],
        'eliminacao_novo' => $_POST['rnc']['eliminacao_novo'],
        'registro_eficacia' => $_POST['rnc']['registro_eficacia'],
        'eficaz' => $_POST['rnc']['eficaz'],
        'eficaz_data' => $_POST['rnc']['eficaz_data'],
        'novo_rnc' => $_POST['rnc']['novo_rnc'],
    );
        ;
    // map
    rncMapper::map($rnc, $data);
    // validate
    $errors = rncValidador::validade($rnc);
    // validate
    if (empty($errors)) {
        // save
        $dao = new rncDao();
        $rnc = $dao->save($rnc);
        Flash::addFlash('RNC salvo com sucesso.');
        // redirect
        Utils::redirect('detail', array('id' => $rnc->getId()));
    }
}
?>