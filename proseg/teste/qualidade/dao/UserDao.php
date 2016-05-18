<?php
/**
 * DAO for {@link Todo}.
 * <p>
 * It is also a service, ideally, this class should be divided into DAO and Service.
 */
final class UserDao {
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
    public function find(UserSearchCriteria $search = null) {
        $result = array();
        foreach ($this->query($this->getFindSql($search)) as $row) {
            $user = new User();
            UserMapper::map($user, $row);
            $result[$user->getId()] = $user;
        }
        return $result;
    }
    public function find2() {
        foreach ($this->query($this->getFindSql2()) as $row) {
            $user = new User();
            UserMapper::map($user, $row);
            $nome = $user->getNome();
        }
        return @$nome;
    }

    /**
     * Find {@link Todo} by identifier.
     * @return Todo Todo or <i>null</i> if not found
     */
    public function findById($id) {
        $row = $this->query('SELECT * FROM usuario WHERE deleted = 0 and id = ' . (int) $id)->fetch();
        if (!$row) {
            return null;
        }
        $user = new User();
        UserMapper::map($user, $row);
        return $user;
    }

    /**
     * Save {@link Todo}.
     * @param ToDo $todo {@link Todo} to be saved
     * @return Todo saved {@link Todo} instance
     */
    public function save($user) {
        //$user = new User();
        if ($user->getId() === null) {
            return $this->insert($user);
        }
        return $this->update($user);
    }

    /**
     * Delete {@link Todo} by identifier.
     * @param int $id {@link Todo} identifier
     * @return bool <i>true</i> on success, <i>false</i> otherwise
     */
    public function delete($id) {
        $sql = '
            UPDATE usuario SET
                last_modified_on = :last_modified_on,
                deleted = :deleted
            WHERE
                id = :id';
        $statement = $this->getDb()->prepare($sql);
        $this->executeStatement($statement, array(
            ':last_modified_on' => self::formatDateTime(new DateTime(), new DateTimeZone('America/Sao_Paulo')),
            ':deleted' => true,
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

    private function getFindSql(UserSearchCriteria $search = null) {
        $sql = 'SELECT * FROM usuario WHERE deleted = 0 ';
        $orderBy = 'nome';
        if ($search !== null) {
            if ($search->getStatus() !== null) {
                $sql .= 'AND status = ' . $this->getDb()->quote($search->getStatus());
            }
        }
        $sql .= ' ORDER BY ' . $orderBy;
        return $sql;
    }
    private function getFindSql2(UserSearchCriteria $search = null) {
        $sql = 'SELECT * FROM usuario WHERE 1';
        $orderBy = 'id';
        if ($search !== null) {
            if ($search->getStatus() !== null) {
                $sql .= 'AND status = ' . $this->getDb()->quote($search->getStatus());
            }
        }
        $sql .= ' ORDER BY ' . $orderBy;
        return $sql;
    }

    /**
     * @return Todo
     * @throws Exception
     */
    private function insert(User $user){
        print_r($user);
        $sql = '
            INSERT INTO usuario (id, nome, funcao, matricula, email, setor, login)
            VALUES (:id, :nome, :funcao, :matricula, :email, :setor, :login)';
        return $this->execute($sql, $user);
    }
    /**
     * @return Todo
     * @throws Exception
     */
    private function update(User $user) {
        $sql = '
            UPDATE usuario SET
                nome = :nome,
                funcao = :funcao,
                matricula = :matricula,
                email = :email,
                setor = :setor,
                login = :login,
                deleted = :deleted
            WHERE
                id = :id';
        return $this->execute($sql, $user);
    }

    /**
     * @return User
     * @throws Exception
     */
    private function execute($sql, User $user) {
        $statement = $this->getDb()->prepare($sql);
        $this->executeStatement($statement, $this->getParams($user));
        if (!$user->getId()) {
            return $this->findById($this->getDb()->lastInsertId());
        }
        if (!$statement->rowCount()) {
            throw new NotFoundException('TODO with ID "' . $user->getId() . '" does not exist.');
        }
        return $user;
    }

    private function getParams(User $user) {
        $params = array(
            ':id' => $user->getId(),
            ':nome' => $user->getNome(),
            ':funcao' => $user->getFuncao(),
            ':matricula' => $user->getMatricula(),
            ':email' => $user->getEmail(),
            ':setor' => $user->getSetor(),
            ':login' => $user->getLogin()
        );
        if ($user->getId()) {
            // unset created date, this one is never updated
            //unset($params[':created_on']);
        }
       // var_dump($params);
        return $params;
    }

    private function executeStatement(PDOStatement $statement, array $params) {
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
}
?>