<?php
/**
 * DAO for {@link Todo}.
 * <p>
 * It is also a service, ideally, this class should be divided into DAO and Service.
 */
final class rncDao {
    /** @var PDO */
    private $db = null;
    public function __destruct() {
        // close db connection
        $this->db = null;
    }
    /**
     * Find all {@link Todo}s by search criteria.
     * @return array array of {@link Todo}s
     */
    public function find(rncSearchCriteria $search = null) {
        $result = array();
        foreach ($this->query($this->getFindSql($search)) as $row) {
            $rnc = new rnc();
            rncMapper::map($rnc, $row);
            $result[$rnc->getId()] = $rnc;
        }
        return $result;
    }

    /**
     * Find {@link Todo} by identifier.
     * @return Todo Todo or <i>null</i> if not found
     */
    public function findById($id) {
        $row = $this->query('SELECT * FROM rnc WHERE id = ' . (int) $id)->fetch();
        if (!$row) {
            return null;
        }
        $rnc = new rnc();
        rncMapper::map($rnc, $row);
        return $rnc;
    }

    /**
     * Save {@link Todo}.
     * @param ToDo $todo {@link Todo} to be saved
     * @return Todo saved {@link Todo} instance
     */
    public function save(rnc $rnc) {
        if ($rnc->getId() === null) {
            return $this->insert($rnc);
        }
        return $this->update($rnc);
    }

    /**
     * Delete {@link Todo} by identifier.
     * @param int $id {@link Todo} identifier
     * @return bool <i>true</i> on success, <i>false</i> otherwise
     */
    public function delete($id) {
        $sql = '
            UPDATE rnc SET
                ultima_modificacao = :ultima_modificacao
            WHERE
                id = :id';
        $statement = $this->getDb()->prepare($sql);
        $this->executeStatement($statement, array(
            ':ultima_modificacao' => self::formatDateTime(new DateTime()),
            ':id' => $id,
        ));
        return $statement->rowCount() == 1;
    }

    /**
     * @return PDO
     */
    private function getDb() {
        if ($this->db !== null) {
            return $this->db;
        }
        $config = Config::getConfig("db");
        try {
            $this->db = new PDO($config['dsn'], $config['username'], $config['password']);
        } catch (Exception $ex) {
            throw new Exception('DB connection error: ' . $ex->getMessage());
        }
        return $this->db;
    }

    private function getFindSql(rncSearchCriteria $search = null) {
        $sql = 'SELECT * FROM rnc WHERE 1';
        $orderBy = ' prioridade, prazo';
        /*
        if ($search !== null) {
            if ($search->getStatus() !== null) {
                $sql .= 'AND status = ' . $this->getDb()->quote($search->getStatus());
                switch ($search->getStatus()) {
                    case rnc::STATUS_PENDENTE:
                        $orderBy = 'prazo, prioridade';
                        break;
                    case rnc::STATUS_RESOLVIDA:
                    case rnc::STATUS_VENCIDO:
                        $orderBy = 'prazo DESC, prioridade';
                        break;
                    default:
                        throw new Exception('No order for status: ' . $search->getStatus());
                }
            }
        }
        $sql .= ' ORDER BY ' . $orderBy;
         */
        return $sql;
    }

    /**
     * @return Todo
     * @throws Exception
     */
    private function insert(rnc $rnc) {
        $now = new DateTime();
        $rnc->setId(null);
        $rnc->setAbertura($now);
        $rnc->setUltimaModificacao($now);
        $rnc->setStatus(rnc::STATUS_PENDENTE);
        $sql = '
            INSERT INTO rnc (id, prioridade, abertura, ultima_modificacao, prazo, numero, retorno, origem, status, tipoacao, processo, responsavel, detalhamanto, causas, imediata, corretiva, responsavel_implementacao, eliminacao, eliminacao_novo, registro_eficacia, eficaz, eficaz_data, novo_rnc)
                VALUES (:id, :prioridade, :abertura, :ultima_modificacao, :prazo, :mumero, :retorno, :origem, :status, :tipoacao, :processo, :responsavel, :detalhamento, :causas, :imediata, :corretiva, :responsavel_implementacao, :eliminacao, :eliminacao_novo, :registro_eficacia, :eficaz, :eficaz_data, :novo_rnc)';
        return $this->execute($sql, $rnc);
    }

    /**
     * @return Todo
     * @throws Exception
     */
    private function update(rnc $rnc) {
        $rnc->setUltimaModificacao(new DateTime());
        $sql = '
            UPDATE rnc SET
                prioridade = :prioridade,
                ultima_modificacao = :ultima_modificacao,
                prazo = :prazo,
                numero = :numero,
                retorno = :retorno,
                origem = :origem,
                status = :status,
                tipoacao = :tipoacao,
		processo = :processo,
		responsavel = :responsavel,
		detalhamanto = :detalhamanto,
		causas = :causas,
		imediata = :imediata,
		corretiva = :corretiva,
		responsavel_implementacao = responsavel_implementacao,
		eliminacao = :eliminacao,
		eliminacao_novo = :eliminacao_novo,
		registro_eficacia = :registro_eficacia,
		eficaz = eficaz,
		eficaz_data = eficaz_data,
		novo_rnc = :novo_rnc
            WHERE
                id = :id';
        return $this->execute($sql, $rnc);
    }

    /**
     * @return rnc
     * @throws Exception
     */
    private function execute($sql, rnc $rnc) {
        $statement = $this->getDb()->prepare($sql);
        $this->executeStatement($statement, $this->getParams($rnc));
        if (!$rnc->getId()) {
            return $this->findById($this->getDb()->lastInsertId());
        }
        if (!$statement->rowCount()) {
            throw new NotFoundException('RNC with ID "' . $rnc->getId() . '" does not exist.');
        }
        return $rnc;
        var_dump($rnc->getId());
    }

    private function getParams(rnc $rnc) {
        $params = array(
            ':id' => $rnc->getId(),
            ':prioridade' => $rnc->getPrioridade(),
            //':abertura' => self::formatDateTime($rnc->getAbertura()),
            ':ultima_modificacao' => self::formatDateTime($rnc->getUltimaModificacao()),
            ':prazo' => self::formatDateTime($rnc->getPrazo()),
            ':numero' => $rnc->getNumero(),
            ':retorno' => $rnc->getRetorno(),
            ':origem' => $rnc->getOrigem(),
            ':status' => $rnc->getStatus(),
            ':tipoacao' => $rnc->getTipoacao(),
            ':processo' => $rnc->getProcesso(),
            ':responsavel' => $rnc->getResponsavel(),
            ':detalhamanto' => $rnc->getDetalhamento(),
            ':causas' => $rnc->getCausas(),
            ':imediata' => $rnc->getImediata(),
            ':corretiva' => $rnc->getCorretiva(),
            ':responsavel_implementacao' => $rnc->getResponsavel_implementacao(),
            ':eliminacao' => $rnc->getEliminacao(),
            ':eliminacao_novo' => $rnc->getEliminacao_novo(),
            ':registro_eficacia' => $rnc->getRegistro_eficacia(),
            ':eficaz' => $rnc->getEficaz(),
            ':eficaz_data' => $rnc->getEficaz_data(),
            ':novo_rnc' => $rnc->getNovo_rnc(),			
        );
        if ($rnc->getId()) {
            // unset created date, this one is never updated
            unset($params[':abertura']);
        }
        return $params;
    }

    private function executeStatement(PDOStatement $statement, array $params) {
        //print_r($params);
        //print_r($statement);
        //var_dump($statement->execute($params));
        if (!$statement->execute($params)) {
            self::throwDbError($this->getDb()->errorInfo());
        }
    }

    /**
     * @return PDOStatement
     */
    private function query($sql) {
        $statement = $this->getDb()->query($sql, PDO::FETCH_ASSOC);
        if ($statement === false) {
            self::throwDbError($this->getDb()->errorInfo());
        }
        return $statement;
    }

    private static function throwDbError(array $errorInfo) {
        // TODO log error, send email, etc.
        throw new Exception('DB error [' . $errorInfo[0] . ', ' . $errorInfo[1] . ']: ' . $errorInfo[2]);
    }

    private static function formatDateTime(DateTime $date) {
        return $date->format(DateTime::ISO8601);
    }
}
?>