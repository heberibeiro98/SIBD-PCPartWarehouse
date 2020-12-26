<section id="Orders">
  <body>
    <section class="order-list">
      <table>
        <tr>
          <td>Número de referência</td>
          <td>Data</td>
          <td>Método de pagamento</td>
        </tr>
        <?php foreach($encomendas as $encomenda) { ?>
          <tr>
            <td><a href="/action_select_encomenda.php?numref=<?=$encomenda['Num_referencia']?>"><?=$encomenda['Num_referencia']?></a></td>
            <td><a href="/action_select_encomenda.php?numref=<?=$encomenda['Num_referencia']?>"><?=$encomenda['Data']?></td>
            <td><a href="/action_select_encomenda.php?numref=<?=$encomenda['Num_referencia']?>"><?=$encomenda['Metodo_pagamento']?></td>
          </tr>
        <?php } ?>
      </table>
    </section>
  </body>
</section>
</html>
