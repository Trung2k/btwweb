<?php
$user_action = $_POST["user_action"];
switch ($user_action) {
	case "user-login":
		echo "hello";

		break;
	
	default:
		echo "end";
		break;
}
?>