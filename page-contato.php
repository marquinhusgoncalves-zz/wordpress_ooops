<?php

	//response generation function
	$response = "";

	//function to generate response
	function my_contact_form_generate_response($type, $message){
		global $response;

		if($type == "success") $response = "<div class='success'>{$message}</div>";
		else $response = "<div>{$message}</div>";
	}

	//Placeholder
	$ph_name = "Nome";
	$ph_email = "E-mail";
	$ph_fone = "Telefone";
	$ph_assunto = "Assunto";
	$ph_message = "Mensagem";
	$ph_human = "";

	//response messages
	$not_human       = "Verificação humana incorreta.";
	$missing_content = "Por favor coloque todas as informações.";
	$email_invalid   = "Email inválido.";
	$message_unsent  = "Mensagem não enviada. Tente de novo.";
	$message_sent    = "Obrigado! Sua mensagem foi enviada.";

	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$fone = $_POST['message_fone'];
	$assunto = $_POST['message_assunto'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];
	$machine = $_POST['message_machine'];
	$options = "";
	if(isset($_POST["check_list"])) {
		if(is_array($_POST["check_list"])) {
		$options = implode("\r\n", $_POST["check_list"]);
		}
		else {
		$options = $_POST["check_list"];
		}
	}

	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Email da ".get_bloginfo('name') . " - Assunto: " . $assunto;
	$headers = 'From: '. $email . "\r\n" .
	'Reply-To: ' . $email . "\r\n";
	$message = strip_tags("Nome: " . $name . "\r\n \r\n" . "Email: " . $email . "\r\n \r\n" . "Tel contato: " . $fone . "\r\n \r\n" . "Assunto: " . $assunto . "\r\n \r\n" . "Mensagem: " . "\r\n" . $message . "\r\n \r\n" . $options . "\r\n \r\n \r\n" . "Obrigado!" );

	if(!$human == 0){
	if($human != $machine) my_contact_form_generate_response("error", $not_human); //not human!
	else {

		//validate email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			my_contact_form_generate_response("error", $email_invalid);
		else //email is valid
		{
		//validate presence of name and message
		if(empty($name) || empty($fone) || empty($assunto) || empty($message)){
			my_contact_form_generate_response("error", $missing_content);
		}
		else //ready to go!
			{
				$sent = wp_mail($to, $subject, $message, $headers);
				if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
				else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
			}
		}
	}
	}
	else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);


get_header(); ?>

	<div class = "bg-padrao" style = "background: #678995">
	  <div class = "container">
		
		<div class="hit-the-floor">Contato</div>

		<h1>entre em contato com a gente  ou solicite uma cotação</h1>		

		<!-- <a id = "bt-contato" href = "../ooops/contato_1/"><button class = "btn btn-default">contato</button></a>
		<a id = "bt-cotacao" href = "../ooops/contato_2/" style = "margin-left: 20px"><button class = "btn btn-default">cotação</button></a> -->
		
		<div class = "clearfix" id = "contato" style = "padding: 20px 0">
			
		<div id = "respond">

			<form name = "contact-form" id = "formulario" action = "<?php the_permalink(); ?>" method = "post">
				<div class = "clearfix">
					<input class = "col-xs-12" type = "text" name = "message_name" value = "<?php echo esc_attr($_POST['message_name']); ?>" placeholder = "<?php echo $ph_name; ?>" />
					<input class = "col-xs-12" type = "text" name = "message_email" value = "<?php echo esc_attr($_POST['message_email']); ?>" placeholder = "<?php echo $ph_email; ?>" />
					<input class = "col-xs-12" type = "text" name = "message_fone" value = "<?php echo esc_attr($_POST['message_fone']); ?>" placeholder = "<?php echo $ph_fone; ?>" />
					<input class = "col-xs-12" type = "text" name = "message_assunto" value = "<?php echo esc_attr($_POST['message_assunto']); ?>" placeholder = "<?php echo $ph_assunto; ?>" />
					<textarea class = "col-xs-12" type = "text" name = "message_text" rows = "8" placeholder = "<?php echo $ph_message; ?>"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
				</div>

				<div class = "clearfix" style = "margin: 20px 0; text-align: center">
					<p style = "padding-left: 0; display: inline-block; text-transform: uppercase">digite <spam style = "margin: 0 5px; padding: 11px 10px 8px; border: solid 1px white"><?php $Random_code=rand(10,99); echo$Random_code; ?></spam> para enviar</p>
					<label style = "padding-left: 10px"><input type = "text" style = "padding: 8px 10px 6px; width: 44px" name="message_human" placeholder = "<?php echo $ph_human; ?>" /></label>
					<input type = "hidden" name = "message_machine" value = "<?php echo $Random_code; ?>" />
					<input type = "hidden" name = "submitted" value = "1">
					<button type = "submit" class = "btn btn-default btn-send" name = "send">Enviar</button>
				</div>
			</form>

			<div><?php echo $response; ?></div>

		</div>

		</div>

	</div>

	  
	</div> <!-- .bg_padrao -->

<div id = "map-canvas"></div>

  <script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script src = "<?php bloginfo('stylesheet_directory');?>/js/googlemap.min.js"></script>

<?php get_footer(); ?>