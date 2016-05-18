<?php
$status = Utils::getUrlParam('status');
TodoValidator::validateStatus($status);

$dao = new TodoDao();
$search = new TodoSearchCriteria();
$search->setStatus($status);

// data for template
$title = 'Não Conformidades '.Utils::capitalize($status);
if(Utils::capitalize($status)=='Vencido'){
    $title = 'Prazos '.Utils::capitalize($status); 
}else{
    $title = 'Não Conformidades '.Utils::capitalize($status);
}
$todos = $dao->find($search);

?>
