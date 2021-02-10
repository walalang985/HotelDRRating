<?php
    function insert($username,$password){
		$host = "localhost";
        $un = "webprog";
        $pw = "123456";
        $db = "users";
        $conn = mysqli_connect($host,$un,$pw,$db);
		if($conn){
			$sql = "INSERT INTO userinfo(user,pass) VALUES('$username','$password');";
			if($conn->query($sql)){
				header("Location: index.php?registration=success");
			}
			else{
				die($conn->error);
			}
		}
    }
	function update($username,$password){
		
	}
?>