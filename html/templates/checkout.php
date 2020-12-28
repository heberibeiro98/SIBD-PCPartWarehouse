  <section id="Checkout">
    <body>
      <h2>Dados de faturação</h2>
      <p>Email: <?=$_SESSION['emailconta']?></p>
      <p>Nome: <?=$clientinfo['Nome']?></p>
      <p>Morada: <?=$clientinfo['Morada']?></p>
      <p>Número de telefone: <?=$clientinfo['Num_telefone']?></p>
      <p>NIF: <?=$clientinfo['NIF']?></p>
      <h2>Selecione o método de pagamento:</h2>
      <form action="/action_encomenda.php" method="post">
        <input type="radio" name="metodo" value="Multibanco">
        <label for="Multibanco">Multibanco</label><br>
        <input type="radio" name="metodo" value="À cobrança">
        <label for="À cobrança">À cobrança</label><br>
        <input type="submit" value="Efetuar encomenda">
      </form>
    </body>
  </section>
</div>
