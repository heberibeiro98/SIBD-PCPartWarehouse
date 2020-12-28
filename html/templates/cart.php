<section id="Cart">
  <?php if(isset($_SESSION['cart'])) {?>
    <h2>Carrinho</h2>
      <table>
        <tr>
          <td></td>
          <td>Produto</td>
          <td>Preço</td>
          <td>Quantidade</td>
        </tr>
        <?php $total = 0;
          foreach ($_SESSION['cart'] as $Artigo) { ?>
          <tr>
            <td><img src="/images/<?=$Artigo['Categoria']?>/<?=$Artigo['Modelo']?>.jpg"></td>
            <td><?=$Artigo['Marca']?> <?=$Artigo['Modelo']?></td>
            <td>€<?=number_format($Artigo['Preço'], 2)?></td>
            <td><?=$Artigo['Quantidade']?></td>
            <?php $total += ($Artigo['Preço']*$Artigo['Quantidade']); ?>
          </tr>
        <?php } ?>
      </table>
  <h2>Total: €<?=number_format($total, 2)?></h2>
  <form action="/action_checkout.php">
    <input type="submit" value="Checkout">
  </form>
  <?php }
  else { ?>
  <h2>Carrinho vazio!</h2>
<?php } ?>
</section>
</div>
