  <section id="Category">
    <body>
      <section class="list">
        <?php foreach($products as $Artigo) { ?>
          <article>
            <a href="product_page.php?numserie=<?=$Artigo['Num_serie']?>&category=<?=$Artigo['Categoria']?>">
              <h3><?=$Artigo['Marca']?> <?=$Artigo['Modelo']?></h2>
              <img src="./images/<?=$Artigo['Categoria']?>/<?=$Artigo['Modelo']?>.jpg">
            </a>
            <?php $quantidade = GetStockQuantity($Artigo['Num_serie'], 1);
              if($quantidade['Quantidade'] > 0) { ?>
              <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
            <?php }
            else { ?>
              <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
            <?php } ?>
            <p class="price">€<?=number_format($Artigo['Preço'], 2)?></p>
            <form action="action_add_to_cart.php" method="post">
              <input type="hidden" name="Num_serie" value="<?=$Artigo['Num_serie']?>">
              <button>Adicionar ao carrinho</button>
            </form>
          </article>
        <?php } ?>
      </section>
      <?php if(empty($search_name) && empty($search_min) && empty($search_max)) {
        if(!isset($isHomepage)) { ?>
        <div id="pagination">
          <a href="?category=<?=$category?>&page=<?=$page-1?>">&lt;</a>
          <?= $page ?>
          <a href="?category=<?=$category?>&page=<?=$page+1?>">&gt;</a>
        </div>
      <?php } } ?>
    </body>
  </section>
</div>
