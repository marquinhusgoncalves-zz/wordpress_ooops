<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post" style="margin-left: 6px" >

  <div class="form-style col-lg-12">
  	<input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome" required>
  </div>
  
  <div class="form-style col-lg-12">
  	<input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
  </div>
  
  <div class="form-style col-lg-12">
  	<input type="tel" class="form-control" id="form-tel" name="form-tel" placeholder="Telefone" required>
  </div>
  
  <div class="form-style col-lg-12">
  	<input type="text" class="form-control" id="form-aniv" name="form-aniv" placeholder="Nome do aniversariante" required>
  </div>
  
  <div class="form-style col-lg-6">
  	<input type="text" class="form-control" id="form-idade" name="form-idade" placeholder="Idade" required>
  </div>
  
  <div class="form-style col-lg-6">
  	<input type="text" class="form-control" id="form-data" name="form-data" placeholder="Data da festa" required>
  </div>
  
  <div class="form-style col-lg-6">
  	<input type="text" class="form-control" id="form-adultos" name="form-adultos" placeholder="Quantos adultos?" required>
  </div>
  
  <div class="form-style col-lg-6">
  	<input type="text" class="form-control" id="form-criancas" name="form-criancas" placeholder="Quantas crianças?" required>
  </div>
  
  <div class="form-style col-lg-12">
  	<input type="text" class="form-control" id="form-assunto" name="form-assunto" placeholder="Para enviar digite CLIENTE" required>
  </div>
  
  <div class="col-lg-12" style="padding-left: 0">
  	<button type="submit" class="btn btn-default">Enviar</button>
  </div>

</form>