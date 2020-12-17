<section id = "Product">
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEMP</title>
  </head>
  <body>
    <div class = "product">
      <?php
        switch($category) {

          case 'Monitores':
            foreach ($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Tamanho_ecra']?></h2>
                <h2><?=$spec['Resoluçao_ecra']?></h2>
                <h2><?=$spec['Refresh_rate']?></h2>
              </article>
            <?php }
            break;

          case 'Rato':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['DPI']?></h2>
                <h2><?=$spec['Iluminaçao']?></h2>
                <h2><?=$spec['Wireless']?></h2>
              </article>
            <?php }
            break;

          case 'Teclado':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Iluminaçao']?></h2>
                <h2><?=$spec['Wireless']?></h2>
              </article>
            <?php }
            break;

          case 'Headphones':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Microfone']?></h2>
                <h2><?=$spec['Wireless']?></h2>
              </article>
            <?php }
            break;

          case 'PSU':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Watts']?></h2>
                <h2><?=$spec['Fan_size']?></h2>
              </article>
            <?php }
            break;

          case 'CPU':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Clock']?></h2>
                <h2><?=$spec['Num_cores']?></h2>
                <h2><?=$spec['Num_threads']?></h2>
                <h2><?=$spec['Mem_cache']?></h2>
              </article>
            <?php }
            break;

          case 'GPU':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Vram']?></h2>
                <h2><?=$spec['Vram_tipo']?></h2>
                <h2><?=$spec['Clock']?></h2>
                <h2><?=$spec['Dx_ver']?></h2>
              </article>
            <?php }
            break;

          case 'RAM':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Ram_tipo']?></h2>
                <h2><?=$spec['Clock']?></h2>
                <h2><?=$spec['Qtdd_memoria']?></h2>
              </article>
            <?php }
            break;

          case 'Disco':
            foreach($specs as $spec) { ?>
              <article>
                <h2><?=$spec['Tipo_disco']?></h2>
                <h2><?=$spec['Memoria']?></h2>
              </article>
            <?php }
            break;
        } ?>
  </body>
</html>
