<?php
try {
    $mysqli = new mysqli(
        "localhost", //endereco servidor
        "root",     //usuário do banco
        "root",    //senha do banco
        "2ds"     //schema/owner
    );
} catch (mysqli_sql_exception $e) {
}

//Este método esta preparado para executar no banco um select com retorno de diversas linhas
/*$resultadoQuery = db_query('select * from 2ds.ds_usuario', $mysqli);
if($resultadoQuery){
    while($linha = $resultadoQuery->fetch_assoc()){
        echo "estou dentro do loop";
        echo "<br>";
        echo $linha['usu_codigo'];
        echo $linha['usu_senha'];
        echo $linha['usu_ativo'];
        echo "<br>";
    }
   ;   
}else{
    echo"Não deu certo o comando no banco";
}
*/

//-----------------------------------------------------------------------------
//Este metodo esta preparado para retornar uma linha determinada por um Where
/*
$resultadoQuery = db_query('select * from 2ds.ds_usuario where usu_codigo = "celsoxcunha"', $mysqli);
if($resultadoQuery){
    $linha = $resultadoQuery->fetch_assoc();
        echo $linha['usu_codigo'];
        echo $linha['usu_senha'];
        echo $linha['usu_ativo'];
        echo "<br>";  
}else{
    echo"Não deu certo o comando no banco";
}
*/


//Este metodo esta preparado para realizar um Insert no banco de dados de acordo com o preenchimento das variaveis
/*
$usuario = 'nickname';
$senha = '65748';
$ativo = 'SSSSSSS';
$resultadoQuery = db_query("insert into 2ds.ds_usuario 
                           (usu_codigo,usu_senha,usu_ativo) 
                          VALUES ('$usuario','$senha','$ativo')",$mysqli);

if ($resultadoQuery){
    echo "registro gravado no banco com sucesso";
}else{
    echo "Nao deu certo a gravação";
}
*/

//Este metodo esta preparado para realzar um Update no banco de dados
/*
$usuario_old = 'nickname';
$usuario_new = 'LewisHamilton';

$resultadoQuery = db_query("Update 2ds.ds_usuario set usu_codigo = '$usuario_new' 
                             where usu_codigo = '$usuario_old' ", $mysqli);

if($resultadoQuery){
    echo "registro Atualizado no banco com sucesso";

}else{
    echo "Nao deu certo a gravação";
}
*/


$usuario = 'LewisHamilton';

$resultadoQuery = db_query("delete from 2ds.ds_usuario where usu_codigo = '$usuario' ",$mysqli);

if($resultadoQuery){
    echo "registro apagado da historia da humanidade";
}else{
    echo "Oooops, ainda há esperança";
}

//Este método esta preparado para executar no banco um select com retorno de diversas linhas
/*$resultadoQuery = db_query('select * from 2ds.ds_usuario', $mysqli);
if($resultadoQuery){
    while($linha = $resultadoQuery->fetch_assoc()){
        echo "estou dentro do loop";
        echo "<br>";
        echo $linha['usu_codigo'];
        echo $linha['usu_senha'];
        echo $linha['usu_ativo'];
        echo "<br>";
    }
   ;   
}else{
    echo"Não deu certo o comando no banco";
}
*/

//-----------------------------------------------------------------------------
//Este metodo esta preparado para retornar uma linha determinada por um Where
/*
$resultadoQuery = db_query('select * from 2ds.ds_usuario where usu_codigo = "celsoxcunha"', $mysqli);
if($resultadoQuery){
    $linha = $resultadoQuery->fetch_assoc();
        echo $linha['usu_codigo'];
        echo $linha['usu_senha'];
        echo $linha['usu_ativo'];
        echo "<br>";  
}else{
    echo"Não deu certo o comando no banco";
}
*/


//Este metodo esta preparado para realizar um Insert no banco de dados de acordo com o preenchimento das variaveis
/*
$usuario = 'nickname';
$senha = '65748';
$ativo = 'SSSSSSS';
$resultadoQuery = db_query("insert into 2ds.ds_usuario 
                           (usu_codigo,usu_senha,usu_ativo) 
                          VALUES ('$usuario','$senha','$ativo')",$mysqli);

if ($resultadoQuery){
    echo "registro gravado no banco com sucesso";
}else{
    echo "Nao deu certo a gravação";
}
*/

//Este metodo esta preparado para realzar um Update no banco de dados
/*
$usuario_old = 'nickname';
$usuario_new = 'LewisHamilton';

$resultadoQuery = db_query("Update 2ds.ds_usuario set usu_codigo = '$usuario_new' 
                             where usu_codigo = '$usuario_old' ", $mysqli);

if($resultadoQuery){
    echo "registro Atualizado no banco com sucesso";

}else{
    echo "Nao deu certo a gravação";
}
*/


$usuario = 'LewisHamilton';

$resultadoQuery = db_query("delete from 2ds.ds_usuario where usu_codigo = '$usuario' ",$mysqli);

if($resultadoQuery){
    echo "registro apagado da historia da humanidade";
}else{
    echo "Oooops, ainda há esperança";
}


function db_query($cmd, $conn)
{    
    try {
        return $conn->query($cmd);        
    } catch (mysqli_sql_exception $e) {       
        echo $e->getMessage();
    }
}

