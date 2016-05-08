<?php

error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);

defined('DSN') or define('DSN', 'mysql:host=localhost;dbname=dbname'); // trocar pelo nome da base de dados (*)
defined('USUARIO') or define('USUARIO', 'username'); // trocar pelo user (*)
defined('SENHA') or define('SENHA', 'password'); // trocar pela password (*)


class Paginacao_PDO
{
    public $paginador = 'pag';  
    private $solicitador;
    public $sql;
    public $limite = 5; // numero de registos que vao aparecer por pagina (*)
    public $quantidade = 10;
   
    // Construtor carrega a string usada para como paginador
    public function __construct()
    {
        $this->solicitador = $_REQUEST["{$this->paginador}"];      
    }
    // Conexao privada
    private function conexao()
    {
        $conexao = new Conexao();
        $con = $conexao->conexao;
        return $con;
    }
    // Retorna o numero de resultados encontrados  
    public function resultado()
    {
        $this->resultado = $this->conexao()->query(str_replace('*', 'COUNT(*)', $this->sql));
        $this->numeroResultados = $this->resultado->fetchColumn();
        return $this->numeroResultados;
    }
   
    public function paginasTotais()
    {      
        $paginasTotais = ceil($this->resultado() / $this->limite);
        return $paginasTotais;
    }
    // Procura o numero da pagina Atual
    public function paginaAtual()
    {
        if (isset($this->solicitador) && is_numeric($this->solicitador)) {        
            $this->paginaAtual = (int) $this->solicitador;
        } else {
            $this->paginaAtual = 1;
        }

        if ($this->paginaAtual > $this->paginasTotais()) {
            $this->paginaAtual = $this->paginasTotais();
        }

        if ($this->paginaAtual < 1) {
            $this->paginaAtual = 1;
        }

        return $this->paginaAtual;
       
    }
    // Calcula o offset da consulta
    private function offset()
    {
        $offset = ($this->paginaAtual() - 1) * $this->limite;  
        return $offset;
    }
    // Retorna o SQL para trabalhar posteriormente
    public function sql()
    {
        $sql = $this->sql .  " LIMIT {$this->limite} OFFSET {$this->offset()} ";
        return $sql;
    }
    // Imprime a barra de navegaçao da paginaçao
    public function imprimeBarraNavegacao()
    {
        if($this->resultado() > 0) {      
            echo '<div class="pagination" align=center>';
            if ($this->paginaAtual() > 1) {
                echo " <a href='?" . $this->paginador . "=1"  . $this->reconstruiQueryString($this->paginador) . "'>First</a> ";
                $anterior = $this->paginaAtual() - 1;
                echo " <a href='?" . $this->paginador . "=" . $anterior . $this->reconstruiQueryString($this->paginador) . "'>Previous</a> ";
            }
           
            for ($x = ($this->paginaAtual() - $this->quantidade); $x < (($this->paginaAtual() + $this->quantidade) + 1); $x++) {
                if (($x > 0) && ($x <= $this->paginasTotais())) {
                    if ($x == $this->paginaAtual()) {
                        echo " [<b>$x</b>] ";
                    } else {
                        echo " <a href='?" . $this->paginador . "=" . $x . $this->reconstruiQueryString($this->paginador) . "'>$x</a> ";
                    }
                }
            }
           
            if ($this->paginaAtual() != $this->paginasTotais()) {
                $paginaProxima = $this->paginaAtual() + 1;
                echo " <a href='?" . $this->paginador . "=" . $paginaProxima . $this->reconstruiQueryString($this->paginador) . "'>Next</a> ";
                echo " <a href='?" . $this->paginador . "=" . $this->paginasTotais() . $this->reconstruiQueryString($this->paginador) . "'>Last</a> ";
            }
           
            echo '</div>';          
        }  
    }
    // Monta os valores da Query String novamente
    public function reconstruiQueryString($valoresQueryString) {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $partes = explode("&", $_SERVER['QUERY_STRING']);
            $novasPartes = array();
            foreach ($partes as $val) {
                if (stristr($val, $valoresQueryString) == false)  {
                    array_push($novasPartes, $val);
                }
            }
            if (count($novasPartes) != 0) {
                $queryString = "&".implode("&", $novasPartes);
            } else {
                return false;
            }
            return $queryString; // nova string criada
        } else {
            return false;
        }
    }  
   
}
// Voce pode criar outra forma de conexao se desejar
class Conexao
{
    private $_usuario;
    private $_senha;
    private $_dsn;
   
    public function __construct()
    {
        $this->defineUsuario(USUARIO);
        $this->defineSenha(SENHA);
        $this->defineDSN(DSN);  
        $this->abreConexao();
    }
    // Define o Usuario
    public function defineUsuario($usuario)
    {
        $this->_usuario = $usuario;
    }
    // Define a Senha      
    public function defineSenha($senha)
    {
        $this->_senha = $senha;
    }
    // Define o DSN      
    public function defineDSN($dns)
    {
        $this->_dsn = $dns;
    }
    // Abre a conexao sem retornar a mesma
    public function abreConexao()
    {
        $this->conexao = new PDO($this->_dsn, $this->_usuario, $this->_senha);
        $this->conexao->query("SET NAMES utf8");
    }
    // Fecha a conexao
    public function fechaConexao()
    {
        $this->_conexao = null;
    }
}

?>