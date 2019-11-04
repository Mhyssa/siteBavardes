<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"lesbavardes.org"<support@lesbavardes.org>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<img src="http://www.primfx.com/mailing/banniere.png"/>
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
			</body>
		</html>
		';

		mail("staffbavardes@gmail.com", "CONTACT - lesbavardes.org", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<html>
	<head>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>Formulaire de contact !</h2>
		<form method="POST" action="">
			<input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			<input type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<input type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>




<!-- 



// $to = "staffbavardes@gmail.com";
// // $formError = array();
// $nom = $_POST['nom'];
// $prenom = $_POST['prenom'];
// $mail = $_POST['mail'];
// $question = $_POST['question'];
// $headers  =     'from '.$mail;
// $headers .= 'reply-to: '.$to;
// // $headers .=   'reply '.$to;
// $headers.=   'x-mailer '.'PHP/'.phpversion();



// $mailPattern = '/[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}/';
//  mail ($to,$question,$headers);
// // if (isset($_POST['submit'])) {
   
// //     if (!empty($_POST['mail'])) {
// //         if (preg_match($mailPattern, $_POST['mail'])) {
// //             $mail = $_POST['mail'];
// //         } else {
// //             $formError['mail'] = 'Saisie incorrect!!';
// //         }
// //     } else {
// //         $formError['mail'] = 'Veuillez renseigner le champs "Email"';
// //     }

    -->
