<?php
session_start();
require("dbconfig.php");
if(!($_SERVER["REQUEST_METHOD"] == "POST" )){
    header('Location:index.php');
    exit();
}
    $data = stripslashes(file_get_contents("php://input"));
    $mydata = json_decode($data, true);
   /* $id = $mydata['data'];*/
    $username = $mydata['username'];
    $pass = $mydata['pass'];
    /*$password = $mydata['password'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
  ``print_r($username);
      print_r($pass);
    exit();
*/




    if(!empty($username) && !empty($pass) ){
       $sql = mysqli_query($db,"select * from user where username='$username' AND pass='$pass'");
       if(mysqli_num_rows($sql)==1){
    	   $qry = mysqli_fetch_array($sql);
            $_SESSION['username'] = $qry['username'];
    		$_SESSION["id"] = $qry['id'];
    		$_SESSION["login"] = "OK";
    		?>
            <script language="JavaScript">
                alert('You Login SucessFully!');
                document.location='../AddProduct.php';
            </script>
            <?php
        }
    	else{
           $msg = "Please Enter Correct Username and password.";
         echo $msg;
        }
    }
    else {
         $msg = "Please Enter Username and password.";
         echo $msg;
    }
?>
