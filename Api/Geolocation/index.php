<?php

//echo file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyBE74dc8azUZvUW-STA4uiN4XbMSUnaEmM");    

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script type="text/javascript">
	
		$.ajax({
			
			url: "https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyBE74dc8azUZvUW-STA4uiN4XbMSUnaEmM",
			type: "GET",
			success: function(data){
				$.each(data["results"][0]["address_components"], function(key, value){
					
					if(value["types"][0] == "country"){
						alert(value["short_name"]);
					}
					
				})
			}
			
		});
	
	</script>

</html>










