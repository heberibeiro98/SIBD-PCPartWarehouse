  <section id="ChangeData">
    <body>
    <?php
      switch($data) {
        case 'Nome': ?>
        <form action="/action_changedata.php?data=Nome" method="post">
          <input type="text" name="nome" placeholder="Novo nome">
          <input type="submit" value="Submeter">
        </form>
        <?php
          break;

        case 'Morada': ?>
        <form action="/action_changedata.php?data=Morada" method="post">
          <input type="text" name="morada" placeholder="Nova morada">
          <input type="submit" value="Submeter">
        </form>
        <?php
          break;

        case 'Num_telefone': ?>
        <form action="/action_changedata.php?data=Num_telefone" method="post">
          <input type="text" name="num_telefone" placeholder="Novo número de telefone">
          <input type="submit" value="Submeter">
        </form>
        <?php
          break;

        case 'NIF': ?>
          <form action="/action_changedata.php?data=NIF" method="post">
            <input type="text" name="nif" placeholder="Novo NIF">
            <input type="submit" value="Submeter">
          </form>
          <?php
            break;

        case 'Password': ?>
        <form action="/action_changedata.php?data=Password" method="post">
          <input type="text" name="oldpw" placeholder="Password antiga">
          <input type="text" name="newpw" placeholder="Password nova">
          <input type="submit" value="Submeter">
        </form>
        <?php
          break;
          }
        ?>
  </section>
