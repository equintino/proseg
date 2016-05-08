<?php
	include 'rnc.php';
	include '../util/Utils.php';
	echo "Testando a classe RNC<br>";
	//$teste=new rnc;
	//print_r ($teste->allStatuses())."\n";
	//print_r($teste);
	ECHO Utils::createLink('list',array('status' => rnc::STATUS_PENDENTE));
?>