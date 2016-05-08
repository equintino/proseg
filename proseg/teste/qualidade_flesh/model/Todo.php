<?php
/**
 * Model class representing one TODO item.
 */
final class Todo {

    // priority
    const PRIORITY_HIGH = 1;
    const PRIORITY_MEDIUM = 2;
    const PRIORITY_LOW = 3;
    // status
    const STATUS_PENDING = "PENDENTE";
    const STATUS_DONE = "RESOLVIDA";
    const STATUS_VOIDED = "VENCIDO";

    /** @var int */
    private $id;
    /** @var string */
    private $priority;
    /** @var DateTime */
    private $createdOn;
    /** @var DateTime */
    private $dueOn;
    private $prazo;
    /** @var DateTime */
    private $lastModifiedOn;
    /** @var string */
    private $title;
    /** @var string */
    private $description;
    /** @var string */
    private $comment;
    /** @var string one of PENDING/COMPLETED/VOIDED */
    private $status;
    /** @var boolean */
    private $deleted;
    private $numero;
    private $titulo;
    private $comentario;
    private $detalhamento;
    private $descricao;
    private $origem;
    private $tipoacao;
    private $processo;
    private $identificador;
    private $causa;
    private $imediata;
    private $corretiva;

    /**
     * Create new {@link Todo} with default properties set.
     */
    public function __construct() {
        date_default_timezone_set ( "America/Sao_Paulo" );
        $now = new DateTime();
        $this->setCreatedOn($now);
        $this->setLastModifiedOn($now);
        $this->setStatus(self::STATUS_PENDING);
        $this->setDeleted(false);
    }

    public static function allStatuses() {
        return array(
            self::STATUS_PENDING,
            self::STATUS_DONE,
            self::STATUS_VOIDED,
        );
    }
    public static function allPriorities() {
        return array(
            self::PRIORITY_HIGH,
            self::PRIORITY_MEDIUM,
            self::PRIORITY_LOW,
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
            throw new Exception('Cannot change identifier to ' . $id . ', already set to ' . $this->id);
        }
        $this->id = (int) $id;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }

    /**
     * @return int one of 1/2/3
     */
    public function getPriority() {
        return $this->priority;
    }

    public function setPriority($priority) {
        TodoValidator::validatePriority($priority);
        $this->priority = $priority;
    }

    /**
     * @return DateTime
     */
    public function getCreatedOn() {
        return $this->createdOn;
    }

    public function setCreatedOn(DateTime $createdOn) {
        $this->createdOn = $createdOn;
    }

    /**
     * @return DateTime
     */
    public function getDueOn() {
        return $this->dueOn;
    }

    public function setDueOn(DateTime $dueOn) {
        $this->dueOn = $dueOn;
    }
    public function getPrazo() {
        return $this->prazo;
    }

    public function setPrazo(DateTime $prazo) {
        $this->prazo = $prazo;
    }

    /**
     * @return DateTime
     */
    public function getLastModifiedOn() {
        return $this->lastModifiedOn;
    }

    public function setLastModifiedOn(DateTime $lastModifiedOn) {
        $this->lastModifiedOn = $lastModifiedOn;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    /**
     * @return string
     */
    public function getComment() {
        return $this->comment;
    }

    public function setComment($comment) {
        $this->comment = $comment;
    }
    public function getComentario(){
        return $this->comentario;
    }
    public function setComentario($comentario){
        $this->comentario = $comentario;
    }
    public function getDetalhamento(){
        return $this->detalhamento;
    }
    public function setDetalhamento($detalhamento){
        $this->detalhamento = $detalhamento;
    }
    public function getOrigem(){
        return $this->origem;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function getTipoacao(){
        return $this->tipoacao;
    }
    public function setTipoacao($tipoacao){
        $this->tipoacao = $tipoacao;
    }
    public function getProcesso(){
        return $this->processo;
    }
    public function setProcesso($processo){
        $this->processo = $processo;
    }
    public function getIdentificador(){
        return $this->identificador;
    }
    public function setIdentificador($identificador){
        $this->identificador = $identificador;
    }
    public function getCausa(){
        return $this->causa;
    }
    public function setCausa($causa){
        $this->causa = $causa;
    }
    public function getimediata(){
        return $this->imediata;
    }
    public function setImediata($imediata){
        $this->imediata = $imediata;
    }
    public function getCorretiva(){
        return $this->corretiva;
    }
    public function setCorretiva($corretiva){
        $this->corretiva = $corretiva;
    }

    /**
     * @return string one of PENDING/DONE/VOIDED
     */
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        TodoValidator::validateStatus($status);
        $this->status = $status;
    }

    /**
     * @return boolean
     */
    public function getDeleted() {
        return $this->deleted;
    }

    public function setDeleted($deleted) {
        $this->deleted = (bool) $deleted;
    }
}
?>