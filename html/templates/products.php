<section id="products">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Categoria</title>
  </head>
  <body>

  <section class="list">
  <?php foreach($products as $Artigo) { ?>
      <article>
        <h2><?=$Artigo['Marca']?></h2>
        <h3><?=$Artigo['Modelo']?></h3>
        <img src="./images/<?=$Artigo['Categoria']?>/<?=$Artigo['Modelo']?>.jpg">
        <span class="price">€<?=$Artigo['Preço']?></span>
      </article>
    <?php } ?>
  </section>

</section>
