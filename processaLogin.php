<?php
$user = $_POST["Usuario"];
$senha = $_POST["Senha"];
include("dbConnection.php");

// echo($user);
// echo($senha);

try {
    $mysqli = new mysqli(
        "localhost", //endereco servidor
        "root",     //usuário do banco
        "12345678",    //senha do banco
        "db2ads"     //schema/owner
    );
} catch (mysqli_sql_exception $e) {
    echo('erro de conexão com o banco de dados');
}

$resultadoQuery = db_query("select * from tb_usuario where email = '$user' and senha = '$senha';", $mysqli);
if($resultadoQuery){
    if($resultadoQuery->num_rows > 0){
        echo('deu certo');
    }else{
        echo('não deu certo');
    }
    $linha = $resultadoQuery->fetch_assoc();
        // echo "deu certo";  
}else{
    echo"Não deu certo o comando no banco";
}


// echo $_SERVER["REMOTE_ADDR"];
// echo $_POST["Usuario"];
// echo $_POST["Senha"];
?>