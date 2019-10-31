<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function numero(){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        return $numero1 + $numero2;
    }

    public function quadrado(){
        $numero = $_GET['numero'];
        return $numero * $numero;
    }

    public function imc(){
        $nome = $_GET['nome'];
        $altura = $_GET['altura'];
        $idade = $_GET['idade'];
        $peso = $_GET['peso'];
        $sexo = $_GET['sexo'];
        $resultado =  $peso / ($altura * $altura);

    
        if ($resultado < 17 ){
            $situacao = "Muito abaixo do peso";
        }

        if ($resultado > 17 && $resultado < 18.49 ){
            $situacao = "Abaixo do peso";
        }

        if ($resultado > 18.5 && $resultado < 24.99 ){
            $situacao = "Peso normal";
        }

        if ($resultado > 25 && $resultado < 29.99 ){
            $situacao = "Acima do peso";
        }

        if ($resultado > 30 && $resultado < 34.99 ){
            $situacao = "Obesidade 1";
        }

        if ($resultado > 35 && $resultado < 39.99 ){
            $situacao = "Obesidade 2";
        }

        if ($resultado > 40 ){
            $situacao = "Obesidade 3";
        }

        return '<b>'.$nome.'</b>'. ' '.'<b>O Resultado é: </b>'.$resultado .'</br><b>Sua situação é: </b>'. $situacao ;

        // if ($sexo == "feminino" || $sexo == "Feminino"){
            
        // }

        // else if ($sexo == "masculino" || $sexo == "Masculino"){
            
        // }
        
    }
}