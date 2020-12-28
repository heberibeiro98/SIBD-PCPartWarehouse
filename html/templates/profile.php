<?php $clientinfo = getClientInfo($_SESSION['emailconta']); ?>

  <section id="profile">
     <div id="info">
       <h3>Dados da conta</h3>
       <div class="data">
         <h4>Email</h2>
         <p><?=$_SESSION['emailconta']?></p>
         <h4>Nome</h2>
         <p><?=$clientinfo['Nome']?></p>
         <h4>Morada</h2>
         <p> <?=$clientinfo['Morada']?></p>
         <h4>Número de telefone</h2>
         <p><?=$clientinfo['Num_telefone']?></p>
         <h4>NIF</h2>
         <p><?=$clientinfo['NIF']?></p>
       </div>
      <div class="options">
        <h3>Opções</h3>
        <ul>
          <li><a href="/changedata_reedirect.php?data=Nome">Alterar nome</a></li>
          <li><a href="/changedata_reedirect.php?data=Morada">Alterar morada</a></li>
          <li><a href="/changedata_reedirect.php?data=Num_telefone">Alterar número de telefone</a></li>
          <li><a href="/changedata_reedirect.php?data=NIF">Alterar NIF</a></li>
          <li><a href="/changedata_reedirect.php?data=Password">Alterar Password</a></li>
        </ul>
      </div>
      <div class="orders">
        <h3>Encomendas</h3>
        <div><a href="/action_check_encomendas.php">Ver encomendas</a></div>
      </div>
    </div>
   </body>
 </section>
