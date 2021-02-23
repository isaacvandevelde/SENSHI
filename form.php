<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Contact Form</h2>
                    </div>
                    <p>Please fill in this form and submit so we can send you your product.</p>
					<form action="mailto.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" for="name" type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>First name</label>
                            <input id="Voornaam" for="Voornaam" type="text" name="Voornaam" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" for="email" type="email" name="email" class="form-control"required>
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input id="mobile" for="mobile" type="text" name="mobile" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>Street + house number</label>
                            <input id="street" for="street" type="text" name="street" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>postal code</label>
                            <input id="postalcode" for="postalcode" type="text" name="postalcode" class="form-control"    required>
						</div>
						  <div class="form-group">
                            <label>City</label>
                            <input id="city" for="city" type="text" name="city" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>country</label>
                            <input id="country" for="country" type="text" name="country" class="form-control"required>
						</div>
						  <div class="form-group">
                            <label>Name of cardholder/Paypal user</label>
                            <input id="naampje" for="naampje" type="text" name="naampje" class="form-control"required>
						    </div>
    	                
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>