<section id="register">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>

    <?php include("header.php"); ?>

      <form action="../action_register.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="nif" placeholder="NIF">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="num_telefone" placeholder="Número de telefone">
        <input type="submit" value="Registar">
      </form>
  </body>
</html>
</section>
