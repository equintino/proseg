<?php
/**
 * Model class rnc.
 */
final class rnc {

    // prioridade
    const PRIORIDADE_ALTA = 1;
    const PRIORIDADE_MEDIA = 2;
    const PRIORIDADE_BAIXA = 3;
    // status
    const STATUS_PENDENTE = "PENDENTE";
    const STATUS_RESOLVIDA = "RESOLVIDA";
    const STATUS_VENCIDO = "VENCIDO";

    /** @var int */
	private $id;// ok
        private $numero;//ok
	private $novo_rnc;//ok
	private $prioridade; // ok
    /** @var string */
        private $origem;//ok
	private $tipoacao;//ok
	private $processo;//ok
	private $responsavel;//ok
	private $responsavel_implementacao;//ok
	private $detalhamento;//ok
	private $causas;//ok
	private $imediata;//ok
	private $corretiva;//ok
	private $registro_eficacia;//ok
        private $comentario;
    /** @var timestamp */
    private $abertura; //ok
	private $retorno;//ok
	private $eliminacao;//ok
	private $eliminacao_novo;//ok
	private $eficaz_data;//ok
	private $ultima_modificacao; //ok
	private $prazo; //ok
        private $descrcao;
        private $titulo;
    /** @var string um de PENDENTE/RESOLVIDA/VENCIDO */
    private $status;//ok
    /** @var boolean */
    private $eficaz;//ok
    /**
     * Criar new {@link rnc} com propriedade padrão.
     */
    public function __construct() {
        $now = new DateTime();
        $this->setAbertura($now);
        $this->setUltimaModificacao($now);
        $this->setStatus(self::STATUS_PENDENTE);
        $this->setExcluido(false);
    }

    public static function allStatuses() {
        return array(
            self::STATUS_PENDENTE,
            self::STATUS_RESOLVIDA,
            self::STATUS_VENCIDO,
        );
    }
    public static function allPrioridades() {
        return array(
            self::PRIORIDADE_ALTA,
            self::PRIORIDADE_MEDIA,
            self::PRIORIDADE_BAIXA,
        );
    }

    //~ Getters & setters

    /**
     * @return int <i>null</i> if not persistent
     */
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        if ($this->id !== null && $this->id != $id) {
            throw new Exception('Não pode alterar o identificador para ' . $id . ', ele já foi alterado para ' . $this->id);
        }
        $this->id = (int) $id;
	}
   
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        if ($this->numero !== null && $this->numero != $numero) {
            throw new Exception('Não pode alterar o identificador para ' . $numero . ', ele já foi alterado para ' . $this->numero);
        }
        $this->numero = (int) $numero;
    }
    public function getNovo_rnc() {
        return $this->novo_rnc;
    }

    public function setNovo_rnc($novo_rnc) {
        if ($this->novo_rnc !== null && $this->novo_rnc != $novo_rnc) {
            throw new Exception('Não pode alterar o identificador para ' . $novo_rnc . ', ele já foi alterado para ' . $this->novo_rnc);
        }
        $this->novo_rnc = (int) $novo_rnc;
    }

    /**
     * @return int um de 1/2/3
     */

    public function getPrioridade() {
        return $this->prioridade;
    }

    public function setPrioridade($prioridade) {
        rncValidador::validarPrioridade($prioridade);
        $this->prioridade = $prioridade;
    }

    /**
     * @return DateTime
     */

    public function getAbertura() {
        return $this->abertura;
    }

    public function setAbertura(DateTime $abertura) {
        $this->abertura = $abertura;
    }
    public function getPrazo() {
        return $this->prazo;
    }

    public function setPrazo(DateTime $prazo) {
        $this->prazo = $prazo;
    }
    public function getUltimaModificacao() {
        return $this->ultima_modificacao;
    }

    public function setUltimaModificacao($ultima_modificacao) {
        $this->ultima_modificacao = $ultima_modificacao;
    }
    public function getRetorno() {
        return $this->retorno;
    }

    public function setRetorno($retorno) {
        $this->retorno = $retorno;
    }
    public function getEliminacao() {
        return $this->eliminacao;
    }

    public function setEliminacao(DateTime $eliminacao) {
        $this->eliminacao = $eliminacao;
    }
    public function getEliminacao_novo() {
        return $this->eliminacao_novo;
    }

    public function setEliminacao_novo(DateTime $eliminacao_novo) {
        $this->eliminacao_novo = $eliminacao_novo;
    }
    public function getEficaz_data() {
        return $this->eficaz_data;
    }

    public function setEficaz_data(DateTime $eficaz_data) {
        $this->eficaz_data = $eficaz_data;
    }

    /**
     * @return string
     */

    public function getOrigem() {
        return $this->origem;
    }
    public function setOrigem($origem) {
        $this->origem = $origem;
    }
    public function getTipoacao() {
        return $this->tipoacao;
    }
    public function setTipoacao($tipoacao) {
        $this->tipoacao = $tipoacao;
    }
    public function getProcesso() {
        return $this->processo;
    }
    public function setProcesso($processo) {
        $this->processo = $processo;
    }
    public function getResponsavel() {
        return $this->responsavel;
    }
    public function setResponsavel($responsavel) {
        $this->responsavel = $responsavel;
    }
    public function getResponsavel_implementacao() {
        return $this->responsavel_implementacao;
    }
    public function setResponsavel_implmentacao($responsavel_implementacao) {
        $this->responsavel_implementacao = $responsavel_implementacao;
    }
    public function getDetalhamento() {
        return $this->detalhamento;
    }
    public function setDetalhamento($detalhamento) {
        $this->detalhamento = $detalhamento;
    }
    public function getCausas() {
        return $this->causas;
    }
    public function setCausas($causas) {
        $this->causas = $causas;
    }
    public function getImediata() {
        return $this->imediata;
    }
    public function setImediata($imediata) {
        $this->imediata = $imediata;
    }
    public function getCorretiva() {
        return $this->corretiva;
    }
    public function setCorretiva($corretiva) {
        $this->corretiva = $corretiva;
    }
    public function getRegistro_eficacia() {
        return $this->registro_eficacia;
    }
    public function setRegistro_eficacia($registro_eficacia) {
        $this->registro_eficacia = $registro_eficacia;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getComentario() {
        return $this->comentario;
    }

    public function setComentario($comentario) {
        $this->comentario = $comentario;
    }
    /**
     * @return string de PENDENTE/RESOLVIDO/VNCIDO
     */

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        rncValidador::validarStatus($status);
        $this->status = $status;
    }

    /**
     * @return boolean
     */

    public function getExcluido() {
        return $this->excluido;
    }

    public function setExcluido($excluido) {
        $this->excluido = (bool) $excluido;
    }
    public function getEficaz() {
        return $this->eficaz;
    }

    public function setEficaz($eficaz) {
        $this->eficaz = (bool) $eficaz;
    }
}
?>