<?php
$req_id=$_REQUEST["req_id"];

$serverName="localhost";
$userName="root";
$password="";
$dbName="treasure_hunt";

$VALIDATE_TEAM_NAME=1;
$REGISTER_TEAM=2;

switch($req_id)
{
case $VALIDATE_TEAM_NAME: 
		{
			$conn = new mysqli($serverName, $userName, $password, $dbName);
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}
			else			
			{
				$sql="select team_name from user_details where team_name='".$_REQUEST["team_name"]."'";
				$result = $conn->query($sql);
				
				if($result->num_rows > 0)
					echo $_REQUEST["team_name"]." is already taken/Not available";
				else
					echo "available";
			}
		}
		break;
case $REGISTER_TEAM:
		{
			echo "not available";
		}
		break;
}

?>