<?php
 
    require_once("connection.php");
 
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            echo ' Please Fill the Required Credentials ';
        }
        else
        {
            $Username = $_POST['username'];
            $Password = $_POST['password'];
			

			$query2 = "SELECT * FROM register where username = '$Username'";
			$result2 = mysqli_query($connection,$query2);
			$data = mysqli_fetch_row($result2);
			
			if($data == null){
				echo 'Invalid Username or Password';
			}
			
			elseif($data[1] == $Password ){
				header("location:main.php");
			}
			
            else
            {
                echo "Invalid Username or Password";
            }
        }
    }
    else
    {
        header("location:index.php");
    }
?>