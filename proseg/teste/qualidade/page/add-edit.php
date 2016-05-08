<?php
$errors = array();
$todo = null;
$edit = array_key_exists('id', $_GET);


if ($edit) {
    $todo = Utils::getTodoByGetId();
} else {
    // set defaults
    $todo = new Todo();
    $todo->setPriority(Todo::PRIORITY_MEDIUM);
    $dueOn = new DateTime("+5 day", new DateTimeZone('America/Sao_Paulo'));
    $dueOn->setTime(0, 0, 0);
    $todo->setDueOn($dueOn);
}

if (array_key_exists('cancel', $_POST)) {
    // redirect
    Utils::redirect('detail', array('id' => $todo->getId()));
} elseif (array_key_exists('save', $_POST)) {
    // for security reasons, do not map the whole $_POST['todo']
    $data = array(
        'title' => $_POST['todo']['title'],
        'due_on' => $_POST['todo']['due_on_date'] . ' ' . @$_POST['todo']['due_on_hour'] . ':' . @$_POST['todo']['due_on_minute'] . ':00',
        'priority' => $_POST['todo']['priority'],
        'description' => @$_POST['todo']['description'],
        'comment' => @$_POST['todo']['comment'],
        'descricao' => $_POST['todo']['descricao'],
        'numero' => $_POST['todo']['numero'],
        'origem' => $_POST['todo']['origem'],
        'tipoacao' => $_POST['todo']['tipoacao'],
        'processo' => $_POST['todo']['processo'],
        'identificador' => $_POST['todo']['identificador'],
        'causa' => $_POST['todo']['causa'],
        'imediata' => $_POST['todo']['imediata'],
        'corretiva' => $_POST['todo']['corretiva']
    );
        ;
    // map
    TodoMapper::map($todo, $data);
    // validate
    $errors = TodoValidator::validate($todo);
    // validate
  
    if (empty($errors)) {
        // save
        $dao = new TodoDao();
        $todo = $dao->save($todo);
        Flash::addFlash('RNC salvo com sucesso.');
        // redirect
        Utils::redirect('detail', array('id' => $todo->getId()));
    }
}
?>