<?php
    if (isset( $_REQUEST["lastname"]) || isset( $_REQUEST["age"]) || isset($_REQUEST['pass'])){
	if(preg_match("/[^A-Za-z'-]/",$_REQUEST['pass']))
    {
    	echo "Welcome".$_REQUEST['last name']."<br/>";
    	echo "You are".$_REQUEST['age']."Years old";
    	echo "My password is".$_REQUEST['pass']."This is unsecured";
    }
    else{
    	die("Password complexity does not meet.
    	Your passsword must contain 1 Uppercase and 1 lowercase and 1 number.");
    }
}


   
?>
<br><br><br><a href="index.php"> <button style="font-size: 10px;border-radius: 3px; background: gray ;">BACK </button> </a>