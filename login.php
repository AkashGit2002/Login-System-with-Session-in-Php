
<?php

session_start();

?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button , .btn{   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Student Login Form </h1> </center>   
    <form action="#" method="POST" >  
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <label for="img">Select image:</label>
            <input type="file" id="img" name="upload" accept="image/*">
            <img src="./img/beef.jpg" alt="" width="100px">
            <input type="submit" value="Login" class="btn" name="login">   
            <input type="checkbox" checked="checked"> Remember me   
            <button type="submit" class="cancelbtn"> Cancel</button>   
            Forgot <a href="#"> password? </a>   
        </div>   
    </form>     
</body>     
</html>  


<?php

include("connection.php");

if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM  ?(database name) WHERE email='$username' AND  password='$password'";

	$data=mysqli_query($conn,$query);

	$total=mysqli_num_rows($data);

	if($total==1){
		$_SESSION['user']=$username;
        echo $_SESSION['user'];
		header('location:index.php');
	}
	else{
		echo "Login failed";
	}
    // $folder="/img";
    // $tempname= $_FILES["upload"]["name"];
    // $tempname=$
}

?>
