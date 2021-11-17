<?php
/**
 * Método para gerar CNPJ válido, com máscara ou não
 * @example cnpjRandom(0)
 *          para retornar CNPJ sem máscar
 * @param int $mascara 
 * @return string
 */

class Resultado{
    function cnpjRandom($mascara = 1){
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = 0;
        $n10 = 0;
        $n11 = 0;
        $n12 = 1;
        $d1 = $n12 * 2 + $n11 * 3 + $n10 * 4 + $n9 * 5 + $n8 * 6 + $n7 * 7 + $n6 * 8 + $n5 * 9 + $n4 * 2 + $n3 * 3 + $n2 * 4 + $n1 * 5;
        $d1 = 11 - (self::mod($d1, 11) );
        if ($d1 >= 10) {
            $d1 = 0;
        }
        $d2 = $d1 * 2 + $n12 * 3 + $n11 * 4 + $n10 * 5 + $n9 * 6 + $n8 * 7 + $n7 * 8 + $n6 * 9 + $n5 * 2 + $n4 * 3 + $n3 * 4 + $n2 * 5 + $n1 * 6;
        $d2 = 11 - (self::mod($d2, 11) );
        if ($d2 >= 10) {
            $d2 = 0;
        }
        $retorno = '';
        if ($mascara == 1) {
            $retorno = '' . $n1 . $n2 . "." . $n3 . $n4 . $n5 . "." . $n6 . $n7 . $n8 . "/" . $n9 . $n10 . $n11 . $n12 . "-" . $d1 . $d2;
        } else {
            $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $n10 . $n11 . $n12 . $d1 . $d2;
        }
        return $retorno;
    }
    
    /**
     * Método para gerar CPF válido, com máscara ou não
     * @example cpfRandom(0)
     *          para retornar CPF sem máscar
     * @param int $mascara
     * @return string
     */

    function cpfRandom($mascara = 1) {
        $n1 = rand(0, 9);
        $n2 = rand(0, 9);
        $n3 = rand(0, 9);
        $n4 = rand(0, 9);
        $n5 = rand(0, 9);
        $n6 = rand(0, 9);
        $n7 = rand(0, 9);
        $n8 = rand(0, 9);
        $n9 = rand(0, 9);
        $d1 = $n9 * 2 + $n8 * 3 + $n7 * 4 + $n6 * 5 + $n5 * 6 + $n4 * 7 + $n3 * 8 + $n2 * 9 + $n1 * 10;
        $d1 = 11 - (self::mod($d1, 11) );
        if ($d1 >= 10) {
            $d1 = 0;
        }
        $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
        $d2 = 11 - (self::mod($d2, 11) );
        if ($d2 >= 10) {
            $d2 = 0;
        }
        $retorno = '';
        if ($mascara == 1) {
            $retorno = '' . $n1 . $n2 . $n3 . "." . $n4 . $n5 . $n6 . "." . $n7 . $n8 . $n9 . "-" . $d1 . $d2;
        } else {
            $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $d1 . $d2;
        }
        return $retorno;
    }
    
    /**
     * @param float $dividendo
     * @param float $divisor
     * @return float
     */
    public static function mod($dividendo, $divisor) {
        return round($dividendo - (floor($dividendo / $divisor) * $divisor));
    }

    function randomDate($start_date, $end_date){
        $min = strtotime($start_date); //Data início
        $max = strtotime($end_date); //Data final
        $val = rand($min, $max); //Função data aleatória
    
        return date('d/m/Y', $val); //retorna data formato BR
    }
}


/*
$a = new Gerador();
for($i=1;$i<=2000;$i++){
    echo '1;' . $a->cpfRandom(1) . ';Cliente Teste ' . $i . ';;;Rua 21 de Abril;;Brás;;São Paulo;SP;03047-000;;;;equipe.qa@receiv.it<br />';
}
for($i=2001;$i<=4000;$i++){
    echo '1;' . $a->cpfRandom(1) . ';Cliente Teste ' . $i . ';;;Avenida A;;Juliana;;Belo Horizonte;MG;31744‑620;;;;equipe.qa@receiv.it<br />';
}
for($i=4001;$i<=6000;$i++){
    echo '1;' . $a->cpfRandom(1) . ';Cliente Teste ' . $i . ';;;Rua 1;;Residencial Coxipó;;Cuiabá;MT;78089-712;;;;equipe.qa@receiv.it<br />';
}
for($i=6001;$i<=8000;$i++){
    echo '1;' . $a->cpfRandom(1) . ';Cliente Teste ' . $i . ';;;Rua 13 de Maio;;Centro;;Florianópolis;MG;88020-231;;;;equipe.qa@receiv.it<br />';
}
for($i=8001;$i<=10000;$i++){
    echo '1;' . $a->cpfRandom(1) . ';Cliente Teste ' . $i . ';;;Rua Vulpiano Machado;;Campo Grande;;Recife;PE;52040-600;;;;equipe.qa@receiv.it<br />';
}

for($i=1;$i<=2000;$i++){
    echo '1;' . $a->cnpjRandom(1) . ';Empresa Teste ' . $i . ';;;Rua 21 de Abril;;Brás;;São Paulo;SP;03047-000;;;;equipe.qa@receiv.it<br />';
}
for($i=2001;$i<=4000;$i++){
    echo '1;' . $a->cnpjRandom(1) . ';Empresa Teste ' . $i . ';;;Avenida A;;Juliana;;Belo Horizonte;MG;31744‑620;;;;equipe.qa@receiv.it<br />';
}
for($i=4001;$i<=6000;$i++){
    echo '1;' . $a->cnpjRandom(1) . ';Empresa Teste ' . $i . ';;;Rua 1;;Residencial Coxipó;;Cuiabá;MT;78089-712;;;;equipe.qa@receiv.it<br />';
}
for($i=6001;$i<=8000;$i++){
    echo '1;' . $a->cnpjRandom(1) . ';Empresa Teste ' . $i . ';;;Rua 13 de Maio;;Centro;;Florianópolis;MG;88020-231;;;;equipe.qa@receiv.it<br />';
}
for($i=8001;$i<=10000;$i++){
    echo '1;' . $a->cnpjRandom(1) . ';Empresa Teste ' . $i . ';;;Rua Vulpiano Machado;;Campo Grande;;Recife;PE;52040-600;;;;equipe.qa@receiv.it<br />';
}

for($i=0;$i<=40000;$i++){
    echo '2;;EX' . $i . ';1;' . $a->randomDate('2020/01/01', '2022/12/31') . ';;' . rand(1,5000) . ',' . rand(0,99) . '<br />';
}
*/

?>