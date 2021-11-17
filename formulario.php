<html>
    <head>
        <meta charset="UTF=8" />
        <title>Gerar Arquivos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            </head>
    <body>
        <fieldset style="border-width:medium; border-style:solid; border-color:black; width:50%; background-color: orange;">
            <h3 style="text-align: center;">Gerador de Arquivos para Importação</h3>
            <br />
        <form action="resultado.php" method="GET">
            <div class="col">
                <div class="row" style="width: 100%;">
                    <div class="col">
                        <div class="form-outline">
                        <input type="number" id="quantidadeCPF" name="quantidadeCPF" class="form-control" min="0" required />
                        <label class="form-label" for="quantidadeCPF">Quantidade de CPF</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                        <input type="number" id="quantidadeCNPJ" name="quantidadeCNPJ" class="form-control" min="0" required />
                        <label class="form-label" for="quantidadeCNPJ">Quantidade de CNPJ</label>
                        </div>
                    </div>
                </div>

                <hr />

                <div class="row" style="width: 100%">
                <div class="col">
                    <div class="form-outline">
                        <input type="date" id="dataInicio" name="dataInicio" class="form-control" min="0" required />
                        <label class="form-label" for="dataInicio">Data Início</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                        <input type="date" id="dataFim" name="dataFim" class="form-control" min="0" required />
                        <label class="form-label" for="dataFim">Data Final</label>
                    </div>
                </div>
                </div>

                <hr />

                <div class="row" style="width: 100%">
                    <div class="col">
                        <div class="form-outline">
                            <input type="number" id="valorMinimo" name="valorMinimo" class="form-control" min="0" step="0.01" required />
                            <label class="form-label" for="valorMinimo">Valor Mínimo</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                            <input type="number" id="valorMaximo" name="valorMaximo" class="form-control" min="0" step="0.01" required />
                            <label class="form-label" for="valorMaximo">Valor Máximo</label>
                        </div>
                    </div>
                </div>

                <hr />
            
                <div>
                    <button type="submit" style="width: 150px; height:50px;border-radius:50%;">Enviar</button>
                </div>
            </div>
        </form>
        </fieldset>
    </body>
</html>
