<section id="Category">
  <body>
  <section class="list">
    <?php foreach($products as $Artigo) { ?>
      <article>
        <a href="product_page.php">
        <h2><?=$Artigo['Marca']?></h2>
        <h3><?=$Artigo['Modelo']?></h3>
        <img src="./images/<?=$Artigo['Categoria']?>/<?=$Artigo['Modelo']?>.jpg">
        <span class="price">€<?=$Artigo['Preço']?></span>
        </a>
      </article>
    <?php } ?>
  </section>
</section>
