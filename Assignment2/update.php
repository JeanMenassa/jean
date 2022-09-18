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
    $name= $_POST['contact_name'];
    $mobile= $_POST['contact_mobile_number'];
    $profession= $_POST['contact_profession'];
    $tel= $_POST['contact_Tel_number'];

	if ( $connect )
	{
		mysql_select_db ( $database, $connect );

		$query="UPDATE `contact` SET 
        `contact_name` = '$name', 
        `contact_profession` = '$profession', 
        `contact_Tel_number` = '$tel'
        WHERE contact_mobile_number='" . $mobile . "'" ;

		
		if ( @mysql_query ( $query ) )
			{
            echo 'Record Edited Successfuly';
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