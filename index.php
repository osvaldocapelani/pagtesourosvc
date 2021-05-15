<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PagTesouro IFMT</title>
</head>
<body>
    <form action="recebePost.php" method="post">
    <div> <input type="hidden" readonly name="nomeUG" id="nomeUG" value="158335"></div>
        <div> Código: 
            <select name="codigo" id="codigo" required>
                <option value="" selected>escolha uma opção</option>
                <option value="8783">18806 Devolução De Despesas Exercio Anterior</option>
                <option value="8784">28803 Arrendamento</option>
                <option value="8785">28804 Ocupação de Imóveis</option>
                <option value="8787">68808 Devolução de Suprimento de Fundos - Exercício</option>
            </select></div>
        <div> Referência: <input type="text" readonly name="referencia" id="referencia" value="15833526414"></div>
        <div> Competência: <input type="text" name="competencia" id="competencia" readonly value="<?php echo date('m/Y'); ?>"></div>
        <div> Vencimento: <input type="date" name="vencimento" id="vencimento"></div>
        <div> CPF ou CNPJ: <input type="number" required name="cnpjCpf" id="cnpjCpf" placeholder="apenas números"></div>
        <div> Nome Contribuinte: <input type="text" required name="nomeContribuinte" id="nomeContribuinte"></div>
        <div> Valor Principal: <input type="number" required name="valorPrincipal" id="valorPrincipal"></div>
        <div> Desconto: <input type="number" name="valorDescontos" id="valorDescontos" value="0"></div>
        <div> Outras deduções: <input type="number" name="valorOutrasDeducoes" id="valorOutrasDeducoes" value="0"></div>
        <div> Valor Multa: <input type="text" name="valorMulta" id="valorMulta" value="0"></div>
        <div> valor Juros: <input type="text" name="valorJuros" id="valorJuros" value="0"></div>
        <div> Outros Acréscimos: <input type="text" name="valorOutrosAcrescimos" id="valorOutrosAcrescimos" value="0"></div>
        <div> modo Navegação: <input type="hidden" name="modoNavegacao" id="modoNavegacao" value="2"></div>
        <div> urlRetorno: <input type="text" name="urlRetorno" readonly id="urlRetorno" value="htpp://"></div><!-- valor 2 não dá retorno, valor 1 tem retorno. Consultar manual api sisru -->

        <input type="submit" value="Enviar">

    </form>
</body>
</html>