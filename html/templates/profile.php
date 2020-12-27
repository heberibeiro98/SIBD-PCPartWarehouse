  <section id="Profile">
   <body>
     <h2>Email: <?=$_SESSION['emailconta']?></h2>
     <h2>Nome: <?=$clientinfo['Nome']?></h2>
     <h2>Morada: <?=$clientinfo['Morada']?></h2>
     <h2>Número de telefone: <?=$clientinfo['Num_telefone']?></h2>
     <h2>NIF: <?=$clientinfo['NIF']?></h2>
    <div class="profile-options">
      <ul>
        <li><a href="/changedata_reedirect.php?data=Nome">Alterar nome</li>
        <li><a href="/changedata_reedirect.php?data=Morada">Alterar morada</li>
        <li><a href="/changedata_reedirect.php?data=Num_telefone">Alterar número de telefone</li>
        <li><a href="/changedata_reedirect.php?data=NIF">Alterar NIF</li>
        <li><a href="/changedata_reedirect.php?data=Password">Alterar Password</li>
        <li><a href="/action_check_encomendas.php">Ver encomendas</li>
      </ul>
    </div>
   </body>
 </section>
