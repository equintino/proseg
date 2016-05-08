<?php
/**
 * Validator for {@link Todo}.
 * @see TodoMapper
 */
final class rncValidador {

    private function __construct() {
    }

    /**
     * Validate the given {@link Todo} instance.
     * @param Todo $todo {@link Todo} instance to be validated
     * @return array array of {@link Error} s
     */
    public static function validade(rnc $rnc) {
        $errors = array();
        if (!$rnc->getAbertura()) {
            $errors[] = new Error('abertura', 'Empty or invalid Created On.');
        }
        if (!$rnc->getUltimaModificacao()) {
            $errors[] = new Error('ultima_modificacao', 'Empty or invalid Last Modified On.');
        }
        if (!trim($rnc->getTitulo())) {
           // $errors[] = new Error('titulo', 'Título não pode estar em branco.');
        }
        if (!$rnc->getPrazo()) {
            $errors[] = new Error('prazo', 'Empty or invalid Due On.');
        }
        if (!trim($rnc->getPrioridade())) {
            $errors[] = new Error('prioridade', 'Priority cannot be empty.');
        } elseif (!self::isValidPriority($rnc->getPrioridade())) {
            $errors[] = new Error('prioridade', 'Invalid Priority set.');
        }
        if (!trim($rnc->getStatus())) {
            $errors[] = new Error('status', 'Status cannot be empty.');
        } elseif (!self::isValidStatus($rnc->getStatus())) {
            $errors[] = new Error('status', 'Invalid Status set.');
        }
        return $errors;
    }

    /**
     * Validate the given status.
     * @param string $status status to be validated
     * @throws Exception if the status is not known
     */
    public static function validarStatus($status) {
        if (!self::isValidStatus($status)) {
            throw new Exception('Unknown status: ' . $status);
        }
    }

    /**
     * Validate the given priority.
     * @param int $priority priority to be validated
     * @throws Exception if the priority is not known
     */
    public static function validarPrioridade($prioridade) {
        if (!self::isValidPriority($prioridade)) {
            //throw new Exception('Inválida prioridade: ' . $prioridade);
        }
    }

    private static function isValidStatus($status) {
        return in_array($status, rnc::allStatuses());
    }

    private static function isValidPriority($prioridade) {
        return in_array($prioridade, rnc::allPrioridades());
    }

}

?>
