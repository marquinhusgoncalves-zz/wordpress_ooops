<?php
$subjectPrefix = '[Orçamento]';
$emailTo = 'daniel@mundosa.com.br';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = stripslashes(trim($_POST['form-name']));
    $email    = stripslashes(trim($_POST['form-email']));
    $phone    = stripslashes(trim($_POST['form-tel']));
    $aniv    = stripslashes(trim($_POST['form-aniv']));
    $idade    = stripslashes(trim($_POST['form-idade']));
    $data    = stripslashes(trim($_POST['form-data']));
    $adultos    = stripslashes(trim($_POST['form-adultos']));
    $criancas    = stripslashes(trim($_POST['form-criancas']));
    $subject  = stripslashes(trim($_POST['form-assunto']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $subject){
        $subject = "$subjectPrefix $subject";
        $body = "Nome: $name <br /> Email: $email <br /> Telefone: $phone <br /> Nome do Aniversariante: $aniv <br /> Idade: $idade <br /> Data da festa: $data <br /> Qdd Adultos: $adultos <br /> Qdd Crinças: $criancas";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }
}
?>
		
		<div class = "container" style = "padding: 50px 0 0">
			<?php if(!empty($emailSent)): ?>
				<div class="col-xs-12">
					<div class="alert alert-success text-center">Sua mensagem foi enviada com sucesso.</div>
				</div>
			<?php else: ?>
				<?php if(!empty($hasError)): ?>
				<div class="col-xs-12">
					<div class="alert alert-danger text-center">Houve um erro no envio, tente novamente mais tarde.</div>
				</div>
				<?php endif; ?>

			<?php endif; ?>
		</div>

		<div class = "container clearfix" style = "padding: 40px 0 60px">
			<div class = "col-sm-6">
				<p class = "fenix-chamada">Aproveite esta oportunidade de ganhar um mega desconto e realizar a festa que você sempre sonhou.</p>
				<p class = "fenix-chamada-bold">Faça seu cadastro e receba o email com o desconto para sua próxima festa.</p>
			</div>

			<div class = "col-sm-6">

		        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" class="form-horizontal" role="form" method="post" style="margin-left: 6px" >

		                <div class="form-style col-lg-12">
		                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Nome" required>
		                </div>

		                <div class="form-style col-lg-12">
		                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email" required>
		                </div>

		                <div class="form-style col-lg-12">
		                    <input type="tel" class="form-control" id="form-tel" name="form-tel" placeholder="Telefone">
		                </div>

		                <div class="form-style col-lg-12">
		                    <input type="text" class="form-control" id="form-aniv" name="form-aniv" placeholder="Nome do aniversariante">
		                </div>

		                <div class="form-style col-lg-6">
		                    <input type="text" class="form-control" id="form-idade" name="form-idade" placeholder="Idade">
		                </div>

		                <div class="form-style col-lg-6">
		                    <input type="text" class="form-control" id="form-data" name="form-data" placeholder="Data da festa">
		                </div>

		                <div class="form-style col-lg-6">
		                    <input type="text" class="form-control" id="form-adultos" name="form-adultos" placeholder="Quantos adultos?">
		                </div>

		                <div class="form-style col-lg-6">
		                    <input type="text" class="form-control" id="form-criancas" name="form-criancas" placeholder="Quantas crianças?">
		                </div>

		                <div class="form-style col-lg-12">
		                    <input type="text" class="form-control" id="form-assunto" name="form-assunto" placeholder="Para enviar digite FENIX" required>
		                </div>

		                <div class="col-lg-12" style="padding-left: 0">
		                    <button type="submit" class="btn btn-default">Enviar</button>
		                </div>

		        </form>

			</div>
		</div>
