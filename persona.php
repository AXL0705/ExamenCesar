<?php


class Persona{
    public $nombre;
    public $peso;
    public $estatura;
    public $IMC;


    
    public function calcularIMC(){
        
        echo '<table style="border:2px solid black;">'.'<tr>'.
            '<th style="border-right:2px solid black;">Nombre</th>'.
            '<th style="border-right:2px solid black;">Peso</th>'.
            '<th style="border-right:2px solid black;">Estatura</th>'.
            '<th style="border-right:2px solid black;">IMC</th>'.
        '</tr>'.
        '<tr>'.
            '<td style="border-right:2px solid black;">'.$this->nombre.'</td>'.
            '<td style="border-right:2px solid black;">'.$this->peso.'</td>'.
            '<td style="border-right:2px solid black;">'.$this->estatura.'</td>'.
            '<td style="border-right:2px solid black;">'.$this->IMC.'</td>'.
            '</tr>'.
        '</table>';
        echo '<br>'.'Resultados del Calculo: '.'<br>'.'<br>';
        if($this->IMC >1 && $this->IMC< 18.5){
            echo '"Su IMC es inferior a 18.5, está dentro de los valores correspondientes a “delgadez o bajo
            peso"';
        }elseif($this->IMC >= 18.5 && $this->IMC <= 24.9){
            echo '"Su IMC es entre 18.5 y 24.9, está dentro de los valores "normales" o de peso saludable."';
        }elseif($this->IMC >= 25 && $this->IMC <=29.9){
            echo 'Su IMC es entre 25.0 y 29.9, está dentro de los valores correspondientes a "sobrepeso".';
        }elseif($this->IMC >= 30){
            echo 'Su IMC es 30.0 o superior, está dentro de los valores de "obesidad".';
        }else{
            echo 'Ingrese un Valor Correcto Para Poder Calcular Su IMC, Gracias!'; 
        }
    }
}