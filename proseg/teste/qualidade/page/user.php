<?php
$errors = array();
$user = null;
$edit = array_key_exists('id', $_GET);

if ($edit) {
    $user = Utils_user::getUserByGetId();
}else{
    $user = new User();
}


if (array_key_exists('cancel', $_POST)) {
    // redirect
    $user = new User();
    Utils::redirect('user', array('id' => $user->getId()));
} elseif (array_key_exists('save', $_POST)) {
    // for security reasons, do not map the whole $_POST['todo']
    $data = array(
        'nome' => $_POST['user']['nome'],
        'funcao' => $_POST['user']['funcao'],
        'matricula' => $_POST['user']['matricula'],
        'email' => @$_POST['user']['email'],
        'setor' => @$_POST['user']['setor'],
        'login' => $_POST['user']['login'],
    );
    // mapeamento
    print_r($user);echo '<br>';
    UserMapper::map($user, $data);
    // validar
    //$errors = UserValidator::validate($user);
  
    if (empty($errors)) {
        // gravar
        $dao = new UserDao();
        $user = $dao->save($user);
        //print_r($user);die;
        Flash::addFlash('Usuário criado com sucesso.');
        // redirecionar
        Utils::redirect('user', array('id' => $user->getId()));
    }
}
?>