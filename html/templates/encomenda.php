  <section id="Order">
    <div class="orders">
      <h3>Encomenda #<?=$numref?></h3>
      <table>
        <tr>
          <td></td>
          <td>Produto</td>
          <td>Nº Série</td>
          <td>Preço</td>
          <td>Quantidade</td>
        </tr>
        <?php $total = 0;
          foreach ($Artigos as $Artigo) { ?>
          <tr>
            <td><img src="/images/<?=$Artigo['Categoria']?>/<?=$Artigo['Modelo']?>.jpg"></td>
            <td><?=$Artigo['Marca']?> <?=$Artigo['Modelo']?></td>
            <td>#<?=$Artigo['Num_serie']?></td>
            <td>€<?=number_format($Artigo['Preço'], 2)?></td>
            <?php $quantidade = GetProductQuantity($Artigo['Num_serie'], $numref); ?>
            <td><?=$quantidade['Qtdd']?></td>
            <?php $total += ($Artigo['Preço']*$quantidade['Qtdd']); ?>
          </tr>
        <?php } ?>
      </table>
      <p>Total: €<?=number_format($total, 2)?></p>
    </div>
  </section>
</div>
