<section id="Order">
      <table>
        <tr>
          <td></td>
          <td>Produto</td>
          <td>Preço</td>
          <td>Quantidade</td>
        </tr>
        <?php $total = 0;
          foreach ($Artigos as $Artigo) { ?>
          <tr>
            <td><img src="/images/<?=$Artigo['Categoria']?>/<?=$Artigo['Modelo']?>.jpg"></td>
            <td><?=$Artigo['Marca']?> <?=$Artigo['Modelo']?></td>
            <td>€<?=number_format($Artigo['Preço'], 2)?></td>
            <td><?=$Artigo['Quantidade']?></td>
            <?php $total += $Artigo['Preço']; ?>
          </tr>
        <?php } ?>
      </table>
  <h2>Total: €<?=number_format($total, 2)?></h2>
