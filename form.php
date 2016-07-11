<?php include 'header.php'; ?>

<div class="inner cover">
<h1 class="cover-heading">Contato</h1>
<?php
$nome = "$_POST[nome]"; //pega o nome do remetente
$email = "$_POST[email]"; //pega o email do remetente
$receptor = "wmacibnc@gmail.com"; //seu email
$mensagem = "$_POST[mensagem]"; //mensagem
$assunto = "ATITUDE - CONTATO"; //assunto

$header = "From: ". $nome . " <" . $email . ">"; 

if (($nome == "") || ($email == "")  || ($mensagem == "")) 
{
  echo "<h4>Atencao! Todos os campos do formulario devem ser preenchidos.</h4>";
  echo "<br /><a href='javascript:window.history.go(-1)'>Voltar</a>";
}
else
{
  if(mail($receptor, $assunto, $mensagem, $header)){
    echo "$nome, seu emai foi enviado com sucesso!";
  }else{
    echo "O email falhou ao enviar";
  }
  echo "<br /><a href='index.php'>Voltar</a>";
}
?>
<br />
<?php include("footer.php");  ?>
</div>