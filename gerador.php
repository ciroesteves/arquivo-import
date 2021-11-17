<?php
    
    $quantidadeCPF = $_GET["quantidadeCPF"];
    $quantidadeCNPJ = $_GET["quantidadeCNPJ"];
    $dataInicio = $_GET["dataInicio"];
    $dataFim = $_GET["dataFim"];
    $valorMin = $_GET["valorMinimo"];
    $valorMax = $_GET["valorMaximo"];

    echo $quantidadeCPF . ' ' . $quantidadeCNPJ . ' ' . $dataInicio . ' ' . $dataFim . ' ' . $valorMin . ' '. $valorMax;
    $resultado = new Resultado();
    $resultado->cpfRandom();
?>