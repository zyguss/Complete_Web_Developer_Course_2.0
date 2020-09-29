<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>

	<div class="container">
		<h1>Post code Finder</h1>
		
		<p>Enter the partial address to get the postcode.</p>
		
		<div id="message"></div>

		<form >
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" class="form-control" id="address" placeholder="Enter partial address">
			</div>
			<button id="find-postcode" type="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
	<script type="text/javascript">
		
			$("#find-postcode").click(function(e){
				
				e.preventDefault();
		
				$.ajax({
		
					url: "https://maps.googleapis.com/maps/api/geocode/json?address="+ encodeURIComponent($("#address").val()) +"&key=AIzaSyBE74dc8azUZvUW-STA4uiN4XbMSUnaEmM",
					type: "GET",
					success: function(data) {
						
						if(data["status"] != "OK"){
							$("#message").html('<div class="alert alert-warning" role="alert"><strong>Postcode could not be found.</strong> </div>');
						} else {
						
						$.each(data["results"][0]["address_components"], function(key, value) {
							
							if (value["types"][0] == "postal_code") {
								
								$("#message").html('<div class="alert alert-success" role="alert"><strong>Postcode found!</strong> The postcode is ' + value["long_name"] + '</div>');
								
							}
						})
		
						}
					}
		
				});
			})
	</script>

</body>

</html>
