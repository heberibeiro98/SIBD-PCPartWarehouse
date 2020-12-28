  <section id = "Product">
    <div class = "product">
      <?php
        switch($category) {

          case 'Monitor': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>Tamanho: <?=$spec['Tamanho_ecra']?></div>
                  <div>Resolução: <?=$spec['Resoluçao_ecra']?></div>
                  <div>Refresh rate: <?=$spec['Refresh_rate']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'Rato': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>DPI: <?=$spec['DPI']?></div>
                  <div>Iluminação: <?=$spec['Iluminaçao']?></div>
                  <div>Wireless: <?=$spec['Wireless']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'Teclado': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>Iluminação: <?=$spec['Iluminaçao']?></div>
                  <div>Wireless: <?=$spec['Wireless']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'Headphones': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>Microfone: <?=$spec['Microfone']?></div>
                  <div>Wireless: <?=$spec['Wireless']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'PSU': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>Consumo: <?=$spec['Watts']?></div>
                  <div>Tamanho ventoinha: <?=$spec['Fan_size']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'Processador': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>Clock: <?=$spec['Clock']?></div>
                  <div>Número de núcleos: <?=$spec['Num_cores']?></div>
                  <div>Número de threads: <?=$spec['Num_threads']?></div>
                  <div>Memória cache: <?=$spec['Mem_cache']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'Placa gráfica': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>VRAM: <?=$spec['Vram']?></div>
                  <div>Tipo de VRAM: <?=$spec['Vram_tipo']?></div>
                  <div>Clock: <?=$spec['Clock']?></div>
                  <div>Versão DirectX: <?=$spec['Dx_ver']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'RAM': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>Tipo: <?=$spec['Ram_tipo']?></div>
                  <div>Clock: <?=$spec['Clock']?></div>
                  <div>Quantidade memória: <?=$spec['Qtdd_memoria']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;

          case 'Disco': ?>
              <article>
                <div class="product-name"><?=$spec['Marca']?> <?=$spec['Modelo']?><hr></div>
                <img src="/images/<?=$spec['Categoria']?>/<?=$spec['Modelo']?>.jpg">
                <div class="specs">
                  <div>Tipo: <?=$spec['Tipo_disco']?></div>
                  <div>Memória: <?=$spec['Memoria']?></div>
                  <?php if($quantidade['Quantidade'] > 0) { ?>
                    <p>Disponível em stock: <i class="fa fa-check" style="color: green"></i></p>
                  <?php }
                  else { ?>
                    <p>Disponível em stock: <i class="fa fa-times" style="color: red"></i></p>
                  <?php } ?>
                </div>
                <span class="price">PREÇO: &nbsp; € <?=number_format($spec['Preço'], 2)?></span>
                <form action="action_add_to_cart.php" method="post">
                  <input type="hidden" name="Num_serie" value="<?=$numserie?>">
                  <button>Adicionar ao carrinho</button>
                </form>
              </article>
            <?php break;
            } ?>
      </div>
      <p class="nota">*Nota: Produtos fora de stock têm um tempo de entrega maior.</p>
  </section>
</div>
