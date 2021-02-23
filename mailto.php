
<?php
if (isset($_POST['submit'])) 
{
	try {
		$subjectname = "SENSHI ORDER";
		$destinataire = 'isaacvandevelde@icloud.com';
		$expediteur   = $_POST['email'];
		$name = $_POST['name'];
		
	
		$vnaam = $_POST['Voornaam'];
		$mobile = $_POST['mobile'];
		$street = $_POST['street'];
		$postalcode = $_POST['postalcode'];
		$city = $_POST['city'];
		$country = $_POST['country'];
		$card = $_POST['naampje'];
	
	
		$reponse      = $expediteur;
		 mail($destinataire,$subjectname,"ORDER: "."\r\n"."naam: ".$name."\r\n"."voornaam: ".$vnaam."\r\n"."mobile: ".$mobile."\r\n"."straat: ".$street."\r\n"."postcode: ".$postalcode."\r\n"."stad: ".$city."\r\n"."land: ".$country."\r\n"."kaart: ".$card, "From: $expediteur\r\nReply-To: $reponse");
		 
	} catch (\Throwable $th) {
		echo "<script>alert('mail not sent')</script>";
	}
	
}
