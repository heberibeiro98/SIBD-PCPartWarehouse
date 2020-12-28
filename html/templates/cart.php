  <section id="Cart">
    <?php if(isset($_SESSION['cart'])) {?>
      <h3>Carrinho</h3>
      <div class="orders">
        <table>
          <tr>
            <td></td>
            <td>Produto</td>
            <td>Preço</td>
            <td>Quantidade</td>
            <td>Remover</td>
          </tr>
          <?php $total = 0;
            foreach ($_SESSION['cart'] as $Artigo) { ?>
            <tr>
              <td><img src="/images/<?=$Artigo['Categoria']?>/<?=$Artigo['Modelo']?>.jpg"></td>
              <td><?=$Artigo['Marca']?> <?=$Artigo['Modelo']?></td>
              <td>€<?=number_format($Artigo['Preço'], 2)?></td>
              <td><?=$Artigo['Quantidade']?></td>
              <td><a href="/action_remove_from_cart.php?numserie=<?=$Artigo['Num_serie']?>"><i class="fa fa-times" style="color: red"></a></i></td>
              <?php $total += ($Artigo['Preço']*$Artigo['Quantidade']); ?>
            </tr>
          <?php } ?>
        </table>
      <div class="checkout">
      <p>Total: €<?=number_format($total, 2)?></p>
        <form action="/action_checkout.php">
          <input type="submit" value="Checkout">
        </form>
      </div>
      <div class="clean">
        <form action="/action_remove_from_cart.php" method="post">
          <input type="hidden" name="limpar" value="limpar">
          <input type="submit" value="Limpar carrinho">
        </form>
      </div>
      <?php }
      else { ?>
      <h2>O seu carrinho está vazio!</h2>
    <?php } ?>
    </div>
  </section>
</div>
