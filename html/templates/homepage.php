<section id="Homepage">
  <body>
    <section class="wrapper">
      <?php $products = getProductsRand('Monitor'); ?>
      <a href="list_products.php?category=Monitor"><h2>Monitores</h2></a>
      <section class="cat1">
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


        <?php $products = getProductsRand('Rato'); ?>
        <a href="list_products.php?category=Rato"><h2>Ratos</h2></a>
        <section class="cat2">
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


        <?php $products = getProductsRand('Teclado'); ?>
        <a href="list_products.php?category=Teclado"><h2>Teclados</h2></a>
        <section class="cat3">
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


        <?php $products = getProductsRand('Headphones'); ?>
        <a href="list_products.php?category=Headphones"><h2>Headphones</h2></a>
        <section class="cat4">
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

        <?php $products = getProductsRand('Processador'); ?>
        <a href="list_products.php?category=Processador"><h2>Processadores</h2></a>
        <section class="cat5">
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


        <?php $products = getProductsRand('Placa gráfica'); ?>
        <a href="list_products.php?category=Placa gráfica"><h2>Placas gráficas</h2></a>
        <section class="cat6">
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


        <?php $products = getProductsRand('RAM'); ?>
        <a href="list_products.php?category=RAM"><h2>Memórias RAM</h2></a>
        <section class="cat7">
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


        <?php $products = getProductsRand('PSU'); ?>
        <a href="list_products.php?category=PSU"><h2>Fontes de alimentação</h2></a>
        <section class="cat8">
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

      <?php $products = getProductsRand('Disco'); ?>
      <a href="list_products.php?category=Disco"><h2>Discos de armazenamento</h2></a>
      <section class="cat9">
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
