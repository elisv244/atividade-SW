=<?php
// Pegar os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];

// Conectar ao banco
include_once("../conexao.php");

// Atualizar os dados do funcionário
$sql = "UPDATE funcionario SET
        nome='$nome',
        sexo='$sexo',
        cargo='$cargo',
        salario='$salario',
        cpf='$cpf',
        celular='$celular'
        WHERE id='$id'";

$result = mysqli_query($conexao, $sql);

if ($result) {
    header("Location: listar.php");
    exit;
} else {
    die("Erro ao atualizar: " . mysqli_error($conexao));
}
?>