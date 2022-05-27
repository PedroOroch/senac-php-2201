<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'calculadoraAvancada.class.php';

class Main{

    private ?int $num1;
    private ?int $num2;
    private CalculadoraAvancada $calc;

    public function __construct()
    {
        $this->num1 = isset($_POST['num1']) ? (int) $_POST['num1'] : null;
        $this->num2 = isset($_POST['num2']) ? (int) $_POST['num2'] : null;

        $this->calc = new CalculadoraAvancada( $this->num1, $this->num2);
     
        $resultado = null;

        try{
            $resultado = $this->operacao();
        }catch(Exception $e){
            echo $e->getMessage();
        }

        $this->front( $this->num1, $this->num2, $resultado);
    }

    private function operacao():?float 
    {
        switch($_POST['operacao'] ?? null){

            case 'soma':
                return $this->calc->soma();
                break;
            case 'subtracao':
                return $this->calc->subtracao();
                break;
            case 'multiplicacao':
                return $this->calc->multiplicacao();
                break;
            case 'divisao':
                return $this->calc->divisao();
                break;
            default:
                throw new Exception('Não é possível executar essa operação');
        }
    }

    private function front( ?int $n1, ?int $n2, ?int $resultado = null):void 
    {
        $_POST['operacao'] =  $_POST['operacao'] ?? '';
        include 'front.php';
    }
}

new Main;