<?php
	echo "testing loling";
// Use in the "Post-Receive URLs" section of your GitHub repo.
	if ( $_POST['payload'] ) {
		echo "received hook";
  		shell_exec( 'cd ~/var/www/html/ && git reset --hard HEAD && git pull origin master' );
	}
?>

hihihihi hi
