<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$genero = $_POST['genero'];
$cpf = $_POST['cpf'];
$email_derecuperação = $_POST['nome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$genero = $_POST['genero'];
$cpf = $_POST['cpf'];

$result = mysqli_query($conexao, "INSERT INTO users(nome,email,data_nasc,genero,cpf) values('$nome','$email','$data_nasc','$genero', '$cpf')");

}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Entre em contato conosco</title>
<link href="formulario.css"	rel="stylesheet">
<style>
    body{
       background-color:#5ac0ff;
    }
</style>
</head>

<body>

<form method="post" action="form.php">
 <fieldset class="f1">
 <legend>Dados Pessoais:</legend>
 <p><label for="nome">Nome:</label><br>
 <input name="nome" type="text" placeholder="Seu nome aqui!"></p>
<p><label for="telefone">Telefone:</label><br>
    <input name="telefone" type="tel" placeholder="Telefone com DDD" required></p> 
    <p><label for="telefone">Telefone:</label><br>
<input name="telefone" type="tel" placeholder="Telefone com DDD" required></p> 
</fieldset>	

<fieldset class="f2">	
<p><label for="email">E-mail:</label>
<input name="email" type="email" placeholder="E-mail válido"></p>
<p><label for="mensagem">Email de recuperação:</label><br>
<input name="email" type="email" placeholder="E-mail válido"></p>

</fieldset>

<fieldset class="f3">
    <p><label for="Data de nascimento">Data de nascimento:</label><br>
        <input name="nome" type="text" placeholder="Data de nascimento aqui!"></p>
       <p><label for="Cidade de nascimento">Cidade de nascimento:</label><br>
           <input name="Cidade de nascimento" type="tel" placeholder="Cidade de nascimento aqui!" required></p> 
           <p><label for="Bairro de nascimento">Bairro de nascimento:</label><br>
       <input name="Bairro de nascimento" type="tel" placeholder="Bairro de nascimento aqui!" required></p> 
       </fieldset>	
       
       <fieldset class="f4">
        <legend></legend>
        <p><label for="CPF">CPF:</label><br>
        <input name="CPF" type="text" placeholder="Seu CPF aqui!"></p>
       <p><label for="RG">RG:</label><br>
           <input name="RG" type="tel" placeholder="Seu RG aqui!" required></p> 
           <p><label for="Data de emissão de RG">Data de emissão de RG: </label><br>
       <input name="Data de emissão de RG " type="Data de emissão de RG " placeholder="Data de emissão de RG aqui!" required></p> 
       </fieldset>	
       <form method="post" action="form.php">
        
        <fieldset class="f5">
        <legend>Endereço com:</legend><p><label for="Rua">Rua:</label><br>
                <input name="Rua" type="text" placeholder="Nome da rua aqui!"></p>
               <p><label for="Número">Número:</label><br>
                   <input name="Número" type="number" placeholder="Número aqui!" required></p> 
                   <p><label for="Complemento">Complemento:</label><br>
               <input name="Complemento" type="complemento" placeholder="Complemento aqui!" required></p>
                <p><label for="Bairro">Bairro:</label><br>
                        <input name="Bairro" type="text" placeholder="Seu bairro aqui!"></p>
                       <p><label for="Cidade">Cidade:</label><br>
                           <input name="Cidade" type="cidade" placeholder="Sua cidade aqui!" required></p> 
                           <p><label for="CEP">CEP: </label><br>
                       <input name="CEP" type="CEP" placeholder="Seu CEP aqui!" required></p> 
                       </fieldset>	
                       <form method="post" action="form.php">

                        <fieldset class="f6"></fieldset>
                        <form method="post" action="form.php">
                           <legend></legend>
                            <p><label for="Nome de usuário ">Nome de usuário:</label><br>
                            <input name="Nome de usuário" type="text" placeholder="Seu nome de usuário aqui!"></p>
                           <p><label for="Senha">Senha:</label><br>
                               <input name="Senha" type="Senha" placeholder="Digite sua senha!" required></p> 
                               <p><label for="Profissão">Profissão:</label><br>
                           <input name="Profissão" type="Profissão" placeholder="Sua profissão aqui!" required></p> 
                           <p><label for="Nível de escolaridade">Nível de escolaridade:</label><br>
                            <input name="Nível de escolaridade" type="text" placeholder="Nível de escolaridade aqui!"></p>
                           <p><label for="Estado civil">Estado civil:</label><br>
                               <input name="Estado civil" type="Estado civil" placeholder="Estado civil" required></p> 
                               <input name="Casado" type="checkbox" value="Casado">                              
<label for="Casado">Casado</label>
<input name="Solteiro" type="checkbox" value="Solteiro">
<label for="Separado">Separado</label>
<input name="Divorciado" type="checkbox" value="Divorciado">
<label for="Viúvo">Viúvo</label>	
<input name="Viúvo" type="checkbox" value="Viúvo">
<label for="Divorciado">Divorciado</label>	
<input name="Solteiro" type="checkbox" value="Solteiro">
<label for="Solteiro">Solteiro</label>	
                               <p><label for="Altura">Altura: </label><br>
                           <input name="Altura" type="Altura" placeholder="Altura" required></p> 
                           <p><label for="Peso">Peso: </label><br>
                            <input name="Peso" type="Peso" placeholder="Seu Peso" required></p> 
                        



</select>	
	</fieldset>	
<button name="Enviar" type="submit">Enviar!</button>	
</form>	





	
	
	
	
	
	
	
	
</body>
</html>