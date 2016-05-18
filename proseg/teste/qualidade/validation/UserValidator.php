<?php
/**
 * Validator for {@link Todo}.
 * @see TodoMapper
 */
final class UserValidator {

    private function __construct() {
    }

    /**
     * Validate the given {@link Todo} instance.
     * @param Todo $todo {@link Todo} instance to be validated
     * @return array array of {@link Error} s
     */
    public static function validate(User $user) {
        $errors = array();        
        if (!trim($user->getNome())) {
            //$errors[] = new Error('nome', 'Nome em branco.');
        }
        if (!trim($user->getFuncao())) {
            //$errors[] = new Error('funcao', 'Necessário inserir a função.');
        }
        if (!trim($user->getMatricula())) {
            //$errors[] = new Error('matricula', 'A matrícula não pode estar em branco.');
        } 
        if (!trim($user->getEmail())) {
            //$errors[] = new Error('email', 'E-mail não pode estar em branco.');
        } 
        if (!trim($user->getSetor())) {
            //$errors[] = new Error('setor', 'Setor não pode estar em branco.');
        } 
        if (!trim($user->getLogin())) {
            //$errors[] = new Error('login', 'Login não pode estar em branco.');
        } 
        //return $errors;
    }

    /**
     * Validate the given status.
     * @param string $status status to be validated
     * @throws Exception if the status is not known
     */
    public static function validateStatus($status) {
        if (!self::isValidStatus($status)) {
            throw new Exception('Unknown status: ' . $status);
        }
    }

    /**
     * Validate the given priority.
     * @param int $priority priority to be validated
     * @throws Exception if the priority is not known
     */
    public static function validatePriority($priority) {
        if (!self::isValidPriority($priority)) {
            throw new Exception('Unknown priority: ' . $priority);
        }
    }

    private static function isValidStatus($status) {
        return in_array($status, Todo::allStatuses());
    }

    private static function isValidPriority($priority) {
        return in_array($priority, Todo::allPriorities());
    }

}

?>
