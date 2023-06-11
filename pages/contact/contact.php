
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doctoblock - Contact</title>
	<meta name="description" content="Fiche de contact doctoblock">
	<link rel="stylesheet" type="text/css" href="../../css/contact.css">
	<link rel="stylesheet" type="text/css" href="../../css/01css.css">
	<link rel="stylesheet" type="text/css" href="../../css/0css.css">
	<link rel="shortcut icon" type="image/png" href="../../favicon.ico">
	<link rel="apple-touch-icon" href="../../favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Bitter&family=Open+Sans&family=Overlock&family=Rubik+Marker+Hatch&display=swap" rel="stylesheet"> 
</head>

<body>


<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - HEADER =====-->

<script src="../../jquery/jquery-3.7.0.min.js"></script> 

		<script>
		$(function(){ 
  		$("#header").load("../../jquery/header.html");
			}); 
		</script>

		<div id="header"></div>

<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - MAIN =====-->


<main>

		<h1>- Contact -</h1>

	<p id="bullecontactpc">    <!-- PC -->
		<img class="chibir" src="../../chibi/repos.png" alt="personnage chibi accoudé"><br><br>

	<span id="txtcontact">Le site est en pleine construction, alors si vous trouvez que certains passages sont mal expliqués, qu'il manque des informations importantes ou que vous trouvez des erreurs, n'hésitez pas à me contacter.</span></p>

			<p id="bullecontacttab">    <!-- TABLETTE -->
				<img class="chibir" src="../../chibi/repos.png" alt="personnage chibi accoudé"><br>

			<span id="txtcontact">Le site est en pleine construction, alors si vous trouvez que certains passages sont mal expliqués, qu'il manque des informations importantes ou que vous trouvez des erreurs, n'hésitez pas à me contacter.</span></p>

					<p id="bullecontacttel">    <!-- TELEPHONE -->
						<img class="chibir" src="../../chibi/repos.png" alt="personnage chibi accoudé">

					<span id="txtcontact">Le site est en pleine construction, alors si vous trouvez que certains passages sont mal expliqués, qu'il manque des informations importantes ou que vous trouvez des erreurs, n'hésitez pas à me contacter.</span></p>


		<form method="post">			
			<p id="formulaire">				
				<input type="text" name="nom" id="nom" placeholder="Nom" maxlength="25" size="30" required><br><br>
							<!-- l'attribut name="nom" pourras servir a récupérer le nom dans la variable $_POST['nom'] -->

				<input type="email" name="email" id="email" placeholder="e-mail" maxlength="50" size="60" required><br><br>
							<!-- l'attribut name="email" pourras servir a récupérer le mail dans la variable $_POST['email'] --> 

				<input type="text" name="sujet" id="sujet" placeholder="objet" maxlength="100" size="110"><br><br>
							<!-- l'attribut name="sujet" pourras servir a récupérer l'objet dans la variable $_POST['sujet'] -->

				<textarea type="text" name="message" id="text" placeholder="...." maxlength="2000" required></textarea><br><br>
							<!-- l'attribut name="message" pourras servir a récupérer le message dans la variable $_POST['message'] -->

				<input type="submit" id="envoyer" value="Envoyer">
			</p>
		</form>
	
<?php 
	if (isset($_POST['message'])) {
		$message = "Ce message vous à été envoyé via la page contact de doctoblock.com
			Nom : " . $_POST["nom"] . "
			Objet : " . $_POST["sujet"] . "
			E-mail : " . $_POST["email"] . "
			Message : " . $_POST["message"];


		$retour = mail("doctoblock@gmail.com", $_POST['sujet'], $message, "From:contact.doctoblock@ovh.com\r\nReply-to:" . $_POST['email'] );
			if ($retour) {
				echo "<p style='display: block; background-color: rgba(0, 204, 102, 0.3); border: 1px solid #00cc66 ; padding: 5px; text-align: center; margin: auto;'>L'e-mail à bien été envoyé.</p>";}}?>

</main><br><br>




<!--================================================================================================================================================================-->
<!--================================================================================================================================================================-->
<!--============================================================================================================================================ BODY - FOOTER =====-->

<script>
		$(function(){ 
  		$("#footer").load("../../jquery/footer.html");
			}); 
		</script>

		<div id="footer"></div>

</body>
</html>