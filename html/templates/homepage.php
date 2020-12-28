<section id="Homepage">
  <body>
    <section class="wrapper">
      <section class="cat1">
        <?php $products = getProductsRand('Monitor'); ?>
        <h2>Monitores</h2>
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

      <section class="cat2">
        <?php $products = getProductsRand('Rato'); ?>
        <h2>Ratos</h2>
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

      <section class="cat3">
        <?php $products = getProductsRand('Teclado'); ?>
        <h2>Teclados</h2>
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

      <section class="cat4">
        <?php $products = getProductsRand('Headphones'); ?>
        <h2>Headphones</h2>
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

      <section class="cat5">
        <?php $products = getProductsRand('Processador'); ?>
        <h2>Processadores</h2>
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

      <section class="cat6">
        <?php $products = getProductsRand('Placa gráfica'); ?>
        <h2>Placas gráficas</h2>
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

      <section class="cat7">
        <?php $products = getProductsRand('RAM'); ?>
        <h2>Memórias RAM</h2>
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

      <section class="cat8">
        <?php $products = getProductsRand('PSU'); ?>
        <h2>Discos de armazenamento</h2>
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

      <section class="cat9">
        <?php $products = getProductsRand('Disco'); ?>
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
    </section>
</section>
</div>
