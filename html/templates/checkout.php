  <section id="Checkout">
    <body>
      <h3>Dados de faturação</h3>
      <div class="data">
        <p>Email: <?=$_SESSION['emailconta']?></p>
        <p>Nome: <?=$clientinfo['Nome']?></p>
        <p>Morada: <?=$clientinfo['Morada']?></p>
        <p>Número de telefone: <?=$clientinfo['Num_telefone']?></p>
        <p>NIF: <?=$clientinfo['NIF']?></p>
      </div>
      <h3>Método de pagamento</h3>
      <div class="payment">
        <form action="/action_encomenda.php" method="post">
          <input type="radio" name="metodo" value="Multibanco">
          <label for="Multibanco">Multibanco</label><br>
          <input type="radio" name="metodo" value="À cobrança">
          <label for="À cobrança">À cobrança</label><br>
          <input type="submit" value="Efetuar encomenda">
        </form>
      </div>
    </body>
  </section>
</div>
