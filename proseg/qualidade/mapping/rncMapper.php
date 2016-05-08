<?php
/**
 * Mapper for {@link Todo} from array.
 * @see TodoValidator
 */
final class rncMapper {
    private function __construct() {
    }
    /**
     * Maps array to the given {@link Todo}.
     * <p>
     * Expected properties are:
     * <ul>
     *   <li>id</li>
     *   <li>priority</li>
     *   <li>created_on</li>
     *   <li>due_on</li>
     *   <li>last_modified_on</li>
     *   <li>title</li>
     *   <li>description</li>
     *   <li>comment</li>
     *   <li>status</li>
     *   <li>deleted</li>
     * </ul>
     * @param Todo $todo
     * @param array $properties
     */
    public static function map(rnc $rnc, array $propriedades) {
        if (array_key_exists('id', $propriedades)) {
            $rnc->setId($propriedades['id']);
        }
        if (array_key_exists('prioridade', $propriedades)) {
            $rnc->setPrioridade($propriedades['prioridade']);
        }
        if (array_key_exists('abertura', $propriedades)) {
            $abertura = self::createDateTime($propriedades['abertura']);
            if ($abertura) {
                $rnc->setAbertura($abertura);
            }
        }
        if (array_key_exists('prazo', $propriedades)) {
            $prazo = self::createDateTime($propriedades['prazo']);
            if ($prazo) {
                $rnc->setPrazo($prazo);
            }
        }
        if (array_key_exists('ultima_modificacao', $propriedades)) {
            $ultima_modificacao = self::createDateTime($propriedades['ultima_modificacao']);
            if ($ultima_modificacao) {
                $rnc->setUltimaModificacao($ultima_modificacao);
            }
        }
        if (array_key_exists('numero', $propriedades)) {
            $rnc->setNumero(trim($propriedades['numero']));
        }
        if (array_key_exists('retorno', $propriedades)) {
            $rnc->setRetorno(trim($propriedades['retorno']));
        }
        if (array_key_exists('titulo', $propriedades)) {
            $rnc->setRetorno(trim($propriedades['titulo']));
        }
        if (array_key_exists('origem', $propriedades)) {
            $rnc->setOrigem(trim($propriedades['origem']));
        }
        if (array_key_exists('status', $propriedades)) {
            $rnc->setStatus($propriedades['status']);
        }
        if (array_key_exists('tipoacao', $propriedades)) {
            $rnc->setTipoacao($propriedades['tipoacao']);
        }
        if (array_key_exists('processo', $propriedades)) {
            $rnc->setProcesso($propriedades['processo']);
        }
        if (array_key_exists('responsavel', $propriedades)) {
            $rnc->setResponsavel($propriedades['responsavel']);
        }
        if (array_key_exists('detalhamento', $propriedades)) {
            $rnc->setDetalhamento($propriedades['detalhamento']);
        }
        if (array_key_exists('causas', $propriedades)) {
            $rnc->setCausas($propriedades['causas']);
        }
        if (array_key_exists('imediata', $propriedades)) {
            $rnc->setImediata($propriedades['imediata']);
        }
        if (array_key_exists('corretiva', $propriedades)) {
            $rnc->setCorretiva($propriedades['corretiva']);
        }
        if (array_key_exists('responsavel_implementacao', $propriedades)) {
            //$rnc->setResponsavel_implementacao($propriedades['responsavel_implementacao']);
        }
        if (array_key_exists('eliminacao', $propriedades)) {
            //$rnc->setEliminacao($propriedades['eliminacao']);
        }
        if (array_key_exists('eliminacao_novo', $propriedades)) {
            //$rnc->setEliminacao_novo($propriedades['eliminacao_novo']);
        }
        if (array_key_exists('registro_eficacia', $propriedades)) {
            $rnc->setRegistro_eficacia($propriedades['registro_eficacia']);
        }
        if (array_key_exists('eficaz', $propriedades)) {
            $rnc->setEficaz($propriedades['eficaz']);
        }
        if (array_key_exists('eficaz_data', $propriedades)) {
            //$rnc->setEficaz_data($propriedades['eficaz_data']);
        }
        if (array_key_exists('novo_rnc', $propriedades)) {
            $rnc->setNovo_rnc($propriedades['novo_rnc']);
        }
    }
    private static function createDateTime($input) {
        //return DateTime::createFromFormat('j-n-Y H:i:s', $input);
        return DateTime::createFromFormat('Y-n-j H:i:s', $input);
    }
}
?>