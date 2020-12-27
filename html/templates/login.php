<?php
  $title = 'Iniciar sessão';
  include("header.php"); ?>
  <section id="Login">
    <body>
        <form action="../action_login.php" method="post">
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">
          <input type="submit" value="Entrar">
        </form>
    </body>
  </section>
</div>
<?php include('footer.php'); ?>
