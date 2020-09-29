<?php

   $row['id'] = 66;

	// md5($row['id']) umesto $salt = 'asas34fsf56s' da ne bi bio uvek isti
	echo md5(md5($row['id'])."password"); 

?>