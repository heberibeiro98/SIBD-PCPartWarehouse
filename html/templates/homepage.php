<?php $title = 'PCPart Warehouse - O armazém com todas as partes que precisas!';
include("header.php");?>

  <div class="main-container">
    <?php echo $_SESSION['nomecliente']; ?>
    <h1>ARTIGOS EM DESTAQUE</h1>
    <div class="products">
      <div class="product-card">
        <div class="product-image">
          <img src="../images/gpus/rtx3090.jpg" alt="Placa gráfica NVIDIA RTX 3090">
        </div>
        <div class="product-info">
          <h3>Placa Gráfica Gigabyte GeForce RTX 3090 24GB GDDR6X</h3>
          <h2>1699,00€</h2>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="../images/cpus/i9-10900k.jpg" alt="Processador Intel i9 10900k CPU">
        </div>
        <div class="product-info">
          <h3>Processador Intel Core i9-10900K 10-Core 3.7GHz 20MB</h3>
          <h2>579,90€</h2>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="../images/monitores/aoc.jpg" alt="Monitor AOC G1 C32G1">
        </div>
        <div class="product-info">
          <h3>Monitor Curvo AOC G1 C32G1 16:9 144Hz</h3>
          <h2>249,90€</h2>
        </div>
      </div>
      <div class="product-card">
        <div class="product-image">
          <img src="../images/ratos/zowie-ec2.jpg" alt="Rato Zowie EC2">
        </div>
        <div class="product-info">
          <h3>Rato BenQ Zowie EC2 e-Sports 3200DPI Preto</h3>
          <h2>75,90€</h2>
        </div>
      </div>
    </div>
  </div>
</body>
