<?php
$serverName = "serverName\instanceName"; //serverName\instanceName
$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
	echo "Connection established.<br />";
	$server_info = sqlsrv_server_info($conn);
	echo "\nSql Server Info\n";
	echo "****************";

	if ($server_info)
	{
		foreach($server_info as $key=$value){
			echo $key . ": " . $value . "\n";		
		}

}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
}

?>
