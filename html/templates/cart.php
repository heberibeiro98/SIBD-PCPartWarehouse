<section id="cart">
  <h2>Carrinho</h2>

  <table>
    <?php foreach ($Artigos as $Artigo => $quantity) { ?>
      <?php foreach ($Artigo as $Atributos) { ?>
      <tr>
        <td><img src="/images/<?=$Atributos['Categoria']?>/<?=$Atributos['Modelo']?>.jpg"></td>
        <td><?=$Atributos['Marca']?> <?=$Atributos['Modelo']?></td>
        <td><?=$Atributos['Preço']?>€</td>
        <td><?=$Artigo['quantity']?></td>
      </tr>
      <?php } ?>
    <?php } ?>
  </table>

  <form action="action_checkout.php">
    <input type="submit" value="Checkout">
  </form>

</section>
