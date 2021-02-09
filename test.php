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
                    <p>Please fill in this form and submit so we can send you your t-shirt.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" name="Voornaam" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control">
						</div>
						  <div class="form-group">
                            <label>Street + house number</label>
                            <input type="street" name="street" class="form-control">
						</div>
						  <div class="form-group">
                            <label>postal code</label>
                            <input type="postalcode" name="postalcode" class="form-control">
						</div>
						  <div class="form-group">
                            <label>City</label>
                            <input type="city" name="city" class="form-control">
						</div>
						  <div class="form-group">
                            <label>country</label>
                            <input type="country" name="country" class="form-control">
						</div>
						

                 
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>