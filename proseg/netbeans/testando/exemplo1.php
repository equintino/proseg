
<?php
class MinhaClasse{
    const constante = 'valor constante';
	private $variavel = 'variavel';

    function mostrarConstante() {
        echo  self::constante . "<br>";
		echo $this->variavel . "<br>";
    }
}

//echo MinhaClasse::constante . "<br>";

$classname = "MinhaClasse";
//echo $classname::constante."<br>"; // A partir do PHP 5.3.0

$classe = new MinhaClasse();
$classe->mostrarConstante();die;

echo $classe::constante; // A partir do PHP 5.3.0
?>
