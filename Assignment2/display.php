<html>
<body>

<?php

	// set your infomation.
	$host		=	'localhost';
	$user		=	'root';
	$pass		=	'';	
	$database	=	'contacts';
	
	
	// connect to the mysql database server.
	$connect = @mysql_connect ( $host, $user, $pass ) ;

	if ( $connect )
	{
		mysql_select_db ( $database, $connect );
		$sql = "SELECT * FROM `contact`";
		
		?>
		<table border ="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>Contact Name</th>
			<th>Mobile Number</th>
			<th>Home Number</th>
			<th>Contact Profession</th>

		</tr>
		<?php

		if ( @mysql_query ( $sql) )
		{
			$query = mysql_query ( $sql );

			$row = mysql_fetch_assoc ( $query );
			do {
				?>
				<tr>
				  <td><?php echo $row['contact_name']; ?> </td>
				  <td><?php echo $row['contact_mobile_number']; ?> </td>
				  <td><?php echo $row['contact_tel_number']; ?> </td>
				  <td><?php echo $row['contact_profession']; ?> </td>
			   
				<tr>
				<?php
			} while ( $row = mysql_fetch_assoc ( $query ) );

		}
		else {
				die ( mysql_error() );
		}	
		
	}
	else {
		trigger_error ( mysql_error(), E_USER_ERROR );
	}		
?>


</body>
</html>