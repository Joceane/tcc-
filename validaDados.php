<?php
include_once "conexao.php";

$acao = $_GET['acao'];
if ($acao == "enviar") {
    $nome_pessoa = $_POST['nomePessoa'];
}

$sexo_pessoa = $_POST['sexoPessoa'];
$cidade_pessoa = $_POST['cidadePessoa'];
$end_pessoa = $_POST['endPessoa'];
$num_Cpf = $_POST['numCpf'];
$email_pessoa = $_POST['emailPessoa'];
$dia_pessoa = $_POST['diaPessoa'];
$mes_pessoa = $_POST['mesPessoa'];
$ano_pessoa = $_POST['anoPessoa'];
$senha = MD5($_POST['senha']);

switch($mes_pessoa) {
	case "Janeiro":   $mes_pessoa = 1;
	break;
	case "Fevereiro": $mes_pessoa = 2;
	break;
	case "Março":     $mes_pessoa = 3;
	break;
	case "Abril":     $mes_pessoa = 4;
	break;
	case "Maio":      $mes_pessoa = 5;
	break;
	case "Junho":     $mes_pessoa = 6;
	break;
	case "Julho":     $mes_pessoa = 7;
	break;
	case "Agosto":    $mes_pessoa = 8;
	break;
	case "Setembro":  $mes_pessoa = 9;
	break;
	case "Outuro":    $mes_pessoa = 10;
	break;
	case "Novembro":  $mes_pessoa = 11;
	break;
	case "Dezembro":  $mes_pessoa = 12;
	break;
}

$datanascimento = $ano_pessoa . "-" . $mes_pessoa . "-" . $dia_pessoa;

//Envia dados para o Banco de Dados
$sql = "INSERT INTO cadastro_dados values ('','" . $nome_pessoa. "','" . $sexo_pessoa . "','" . $cidade_pessoa . "','" . $end_pessoa . "','" . $num_Cpf . "','" . $email_pessoa . "','" . $datanascimento . "','" . $senha . "')";

mysqli_query($conn, $sql);

?>