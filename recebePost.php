<?php
 //Faz o include da classe Comunicacao
 require_once 'comunicacao.php';
 require_once 'tkJWT.php';



 if ($_POST){

  $dados = ""; //Definindo variável $dados

    foreach ($_POST as $key => $value){
        //echo "'".$key."' => '.$value.'";
        $dados = $dados."'".$key."' => '".$value."', ";
      }

  //Cria um novo objeto da classe
  $comunicacao = new Comunicacao();

  //Define os dados de cabeçalho da requisição
  $cabecalho = array('Content-Type: application/json', $tk);

  //recebe os dados via post
  $conteudo = $dados;

  //Define a URL para consumo do serviço
  $url = 'https://valpagtesouro.tesouro.gov.br/api/gru/solicitacao-pagamento';
  
  //Tipo de requisição: POST
  $tpRequisicao = 'POST';
  
  //Faz a chamada da função, passando os parâmetros
  $resposta = $comunicacao->enviaConteudoParaAPI($cabecalho, $conteudo, $url, $tpRequisicao);
 
  //Exibe a resposta da API
  echo $resposta;



 } 
  else 
 {

    echo "Você não deveria estar aqui!";

 }
?>