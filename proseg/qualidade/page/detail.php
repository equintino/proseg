<?php
// data for template
$rnc = Utils::getrncByGetId();
$tooLate = $rnc->getStatus() == rnc::STATUS_PENDENTE && $rnc->getPrazo() < new DateTime();

?>
