<?php 

require_once __DIR__ . "/partials/head.php";

useHead("Logar no Banco X", "Faça login para acessar sua conta X");

require_once __DIR__ . "/partials/header.php"; 

?>

<div>
  <h1>Logar no Banco X</h1>
</div>

<form method="post">
  <div>
    <label for="cpf">CPF: </label>
    <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00">
  </div>
  <div>
    <label for="password">Senha: </label>
    <input type="password" name="password" id="password" minlength="8" placeholder="Informe sua senha">
  </div>
  <div>
    <button type="submit">Logar&nbsp;</button>
    <button type="reset">&nbsp;Limpar</button>
  </div>
</form>

<?php require_once __DIR__ . "/partials/footer.php" ?>
