<?php
session_start();
require("dbconfig.php");
$username = $_POST['username'];
$pass = $_POST['pass'];


if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $sql = mysqli_query($db,"select * from user where username='$username' AND pass='$pass'");
   if(mysqli_num_rows($sql)==1){
	   $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
		$_SESSION["id"] = $qry['id'];
		$_SESSION["login"] = "OK";
		?>
        <script language="JavaScript">
            alert('You Login SucessFully!');
            document.location='AddProduct.php';
        </script>
        <?php
    }
	else{
        ?>
        <script language="JavaScript">
            alert('Enter Correct User Name and pass!');
            document.location='login/';
        </script>
        <?php
    }
}else {
    header("location:index.php");
}
?>