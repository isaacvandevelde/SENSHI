<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $vnaam = $_POST['Voornaam'];
     $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	 $street = $_POST['street'];
	 $postalcode = $_POST['postalcode'];
	 $city = $_POST['city'];
	 $country = $_POST['country'];
     $sql = "INSERT INTO SENSHI (naam, voornaam, Email, telefoon, straat, postcodes, stad, land)
     VALUES ('$name','$vnaam','$email', '$mobile', '$street', '$postalcode', '$city', '$country')";
     if (mysqli_query($conn, $sql)) 
     {
        echo "New record has been added successfully !";
     } else 
     {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>